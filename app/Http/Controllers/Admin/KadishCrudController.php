<?php

namespace App\Http\Controllers\Admin;

//use App\Http\Requests\KadishRequest as StorRequest;
//use App\Http\Requests\KadishRequest as UpdateRequest;
use App\Http\Requests\KadishRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Backpack\CRUD\app\Library\CrudPanel\Traits\Columns;
use Barryvdh\Debugbar\Twig\Extension\Debug;
use DebugBar\DebugBar;
use App\Models\Kadish;
use function MongoDB\BSON\toJSON;

/**
 * Class KadishCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class KadishCrudController extends CrudController
{

    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('App\Models\Kadish');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/Kadish');
        $this->crud->setEntityNameStrings('kadish', 'kaddishes');
        $this->crud->with('client');
//        $this->crud->orderBy('Client_id','DESC');


        $this->crud->addFilter([ // add a "simple" filter called Draft
            'type' => 'simple',
            'name' => 'Order',
            'label'=> 'Order'
        ],
            false, // the simple filter has no values, just the "Draft" label specified above
            function() {
                $this->crud->addClause('where', 'Order', '1');
            });
        $this->crud->addFilter([ // add a "simple" filter called Draft
            'type' => 'simple',
            'name' => 'Difference_Year',
            'label'=> 'Difference_Year'
        ],
            false, // the simple filter has no values, just the "Draft" label specified above
            function() { // if the filter is active (the GET parameter "draft" exits)
                $this->crud->addClause('where', 'Difference_Year', '1');
            });
        $this->crud->addFilter([ // add a "simple" filter called Draft
            'type' => 'simple',
            'name' => 'After_sunset',
            'label'=> 'After_sunset'
        ],
            false, // the simple filter has no values, just the "Draft" label specified above
            function() { // if the filter is active (the GET parameter "draft" exits)
                $this->crud->addClause('where', 'After_sunset', '1');
            });

        $this->crud->addFilter([ // add a "simple" filter called Draft
            'type' => 'simple',
            'name' => 'This_Month',
            'label'=> 'This_Month'
        ],
            false, // the simple filter has no values, just the "Draft" label specified above
            function() { // if the filter is active (the GET parameter "draft" exits)
                @ $Data_J1 = cal_from_jd( unixtojd( time() ), CAL_JEWISH );
                $Data_J1 = '%'.'.'.$Data_J1[ 'month' ].'.'.'%';
                $this->crud->addClause('where', 'J_Date','LIKE', $Data_J1);
//                $this->crud->orderBy('J_day', 'DESC');
            });

        $this->crud->addFilter([ // add a "simple" filter called Draft
            'type' => 'simple',
            'name' => 'Second_Month',
            'label'=> 'Second_Month'
        ],
            false, // the simple filter has no values, just the "Draft" label specified above
            function() { // if the filter is active (the GET parameter "draft" exits)
                @ $Data_J1 = cal_from_jd( unixtojd( time() )+31, CAL_JEWISH );
                $Data_J1 = '%'.'.'.$Data_J1[ 'month' ].'.'.'%';
                $this->crud->addClause('where', 'J_Date','LIKE', $Data_J1);
            });

        $this->crud->addFilter([ // add a "simple" filter called Draft
            'type' => 'simple',
            'name' => 'Third_Month',
            'label'=> 'Third_Month'
        ],
            false, // the simple filter has no values, just the "Draft" label specified above
            function() { // if the filter is active (the GET parameter "draft" exits)
                @ $Data_J1 = cal_from_jd( unixtojd( time() )+61, CAL_JEWISH );
                $Data_J1 = '%'.'.'.$Data_J1[ 'month' ].'.'.'%';
                $this->crud->addClause('where', 'J_Date','LIKE', $Data_J1);
//                $this->crud-;
            });

        $this->crud->addFilter([
            'type' => 'text',
            'name' => 'J_Date',
            'label'=> 'J_Date range'
        ],
            false,
            function($value) { // if the filter is active

               @ $Data_J1 = cal_from_jd( unixtojd( time() )+ $value, CAL_JEWISH );
                $Data_J1 = $Data_J1[ 'day' ].'.'.$Data_J1[ 'month' ].'.'.'%';
                 $this->crud->addClause('where', 'J_Date', 'LIKE', $Data_J1);
            });
        $this->crud->addFilter([
            'type' => 'text',
            'name' => 'Email',
            'label'=> 'Email',
        ],
            false,
            function($value) {
                $this->crud->addClause('whereHas', 'client', function($query) use ($value) {
                    $query->where('Email', '=', $value);
            });
        });

    }

    protected function setupListOperation()
    {
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
//        $this->crud->setFromDb();
        $this->crud->setColumns(
            [
                'id',
            'Name_of_Deceased',
            'Fathers_Name',
            'G_Date',
            'J_Date',
            'Jday',
            'Lang',
            'After_sunset',
                'Order',
            'Difference_Year','Client_id']
        );


        $this->crud->setColumnDetails('Difference_Year', ['label' => " First year"]); // adjusts the properties of the passed in column (by name)
//        $this->crud->orderBy('J_Date','asc');

    }

//    protected function setupCreateOperation()
//    {
//        $this->crud->setValidation(KadishRequest::class);
//
//        $this->crud->with('client');
//        // TODO: remove setFromDb() and manually define Fields
//        $this->crud->setFromDb();
////        $this->crud->addField([
////            'tab' => 'Client',
////            'label' => "Email",
////            'type' => 'text',
////            // имя отношения в модели
////            'name' => 'client_id',
////            // имя отношения в модели
////            'entity' => 'client',
////            // атрибут Article, который будет показан пользователю
////            'attribute' => 'Email',
////            // при создании и обновлении вам нужно добавлять/удалять записи сводной таблицы?
//////            'pivot' => true,
////            'model' => "App\Client", // foreign key model
////        ]);
////        $this->crud->addField([
////
////                'tab' => 'Client',
////                'label' => "Phone_number",
////                'type' => 'text',
////                // имя отношения в модели
////                'name' => 'client_id',
////                // имя отношения в модели
////                'entity' => 'client',
////                // атрибут Article, который будет показан пользователю
////                'attribute' => 'Phone_number',
////                // при создании и обновлении вам нужно добавлять/удалять записи сводной таблицы?
//////                'pivot' => true,
////                'model' => "App\Client", // foreign key model
////        ]
////            );
//    }

    protected function setupUpdateOperation()
    {
//        $this->setupCreateOperation();
        $this->crud->setFromDb();
        $this->crud->removeField('Extras');


        $this->crud->addField([   // select_from_array
            'name' => 'Month',
            'label' => "G_Month",
            'type' => 'select_from_array',
            'fake' => true,
            'options' => [
                '0'=>"-",
                '1'=>"January",
                '2'=>"February",
                '3'=>"March",
                '4'=>"April",
                '5'=>"May",
                '6'=>"June",
                '7'=>"July",
                '8'=>"August",
                '9'=>"September",
                '10'=>"October",
                '11'=>"November",
                '12'=>"December",
            ],
            'allows_null' => false,
            'default' => '0',
            'store_in' => 'Extras' // [optional]
            // 'allows_multiple' => true, // OPTIONAL; needs you to cast this to array in your model;
        ])->afterField('G_Date');
        $this->crud->addField([   // select_from_array
            'name' => 'J_Month',
            'label' => "J_Month",
            'type' => 'select_from_array',
            'fake' => true,
            'options' => [
                '0'=>"-",
                '1'=>"Tishry",
                '2'=>"Heshvan",
                '3'=>"Kislev",
                '4'=>"Tevet",
                '5'=>"Shevat",
                '6'=>"Adar",
                '7'=>"Adar II",
                '8'=>"Nissan",
                '9'=>"Iyar",
                '10'=>"Sevan",
                '11'=>"Tammuz",
                '12'=>"Av",
                '13'=>"Elul",
            ],
            'allows_null' => false,
            'default' => '0',
            'store_in' => 'Extras' // [optional]
            // 'allows_multiple' => true, // OPTIONAL; needs you to cast this to array in your model;
        ])->afterField('J_Date');
    }
}
