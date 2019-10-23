<?php

namespace App\Http\Controllers\Admin;

//use App\Http\Requests\KadishRequest as StorRequest;
//use App\Http\Requests\KadishRequest as UpdateRequest;
use App\Http\Requests\KadishRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

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
        $this->crud->addFilter([ // add a "simple" filter called Draft
            'type' => 'simple',
            'name' => 'Order',
            'label'=> 'Order'
        ],
            false, // the simple filter has no values, just the "Draft" label specified above
            function() { // if the filter is active (the GET parameter "draft" exits)
                $this->crud->addClause('where', 'Order', '1');
                // we've added a clause to the CRUD so that only elements with draft=1 are shown in the table
                // an alternative syntax to this would have been
                // $this->crud->query = $this->crud->query->where('draft', '1');
                // another alternative syntax, in case you had a scopeDraft() on your model:
                // $this->crud->addClause('draft');
            });
        $this->crud->addFilter([ // add a "simple" filter called Draft
            'type' => 'simple',
            'name' => 'Difference_Year',
            'label'=> 'Difference_Year'
        ],
            false, // the simple filter has no values, just the "Draft" label specified above
            function() { // if the filter is active (the GET parameter "draft" exits)
                $this->crud->addClause('where', 'Difference_Year', '1');
                // we've added a clause to the CRUD so that only elements with draft=1 are shown in the table
                // an alternative syntax to this would have been
                // $this->crud->query = $this->crud->query->where('draft', '1');
                // another alternative syntax, in case you had a scopeDraft() on your model:
                // $this->crud->addClause('draft');
            });
        $this->crud->addFilter([ // add a "simple" filter called Draft
            'type' => 'simple',
            'name' => 'After_sunset',
            'label'=> 'After_sunset'
        ],
            false, // the simple filter has no values, just the "Draft" label specified above
            function() { // if the filter is active (the GET parameter "draft" exits)
                $this->crud->addClause('where', 'After_sunset', '1');
                // we've added a clause to the CRUD so that only elements with draft=1 are shown in the table
                // an alternative syntax to this would have been
                // $this->crud->query = $this->crud->query->where('draft', '1');
                // another alternative syntax, in case you had a scopeDraft() on your model:
                // $this->crud->addClause('draft');
            });
//
//        $this->crud->with('client');
    }

    protected function setupListOperation()
    {
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
//        $this->crud->setFromDb();
        $this->crud->setColumns([
            'Name_of_Deceased',
            'Fathers_Name',
            'G_Date',
            'J_Date',
            'Lang',
            'After_sunset',
            'Order',
            'Difference_Year','Client_id']);

//        $this->crud->addField([
//            'name' => 'Name_of_Deceased',
//            'type' => 'text',
//            'label' => "Name_of_Deceased"
//        ]);
//
//        $this->crud->addField([
//            'name' => 'Fathers_Name',
//            'type' => 'text',
//            'label' => "Fathers_Name"
//        ]);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(KadishRequest::class);

        $this->crud->with('client');
        // TODO: remove setFromDb() and manually define Fields
        $this->crud->setFromDb();
//        $this->crud->addField([
//            'tab' => 'Client',
//            'label' => "Email",
//            'type' => 'text',
//            // имя отношения в модели
//            'name' => 'client_id',
//            // имя отношения в модели
//            'entity' => 'client',
//            // атрибут Article, который будет показан пользователю
//            'attribute' => 'Email',
//            // при создании и обновлении вам нужно добавлять/удалять записи сводной таблицы?
////            'pivot' => true,
//            'model' => "App\Client", // foreign key model
//        ]);
//        $this->crud->addField([
//
//                'tab' => 'Client',
//                'label' => "Phone_number",
//                'type' => 'text',
//                // имя отношения в модели
//                'name' => 'client_id',
//                // имя отношения в модели
//                'entity' => 'client',
//                // атрибут Article, который будет показан пользователю
//                'attribute' => 'Phone_number',
//                // при создании и обновлении вам нужно добавлять/удалять записи сводной таблицы?
////                'pivot' => true,
//                'model' => "App\Client", // foreign key model
//        ]
//            );
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();

    }
}
