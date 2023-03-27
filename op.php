<?php
    require_once("rest/dao/ProjectDao.class.php");
    $project_dao = new ProjectDao();



    $type = $_REQUEST['type'];

    switch($type){
        case 'add':

            $first_name = $_REQUEST['first_name'];

            $last_name = $_REQUEST['last_name'];

            $age = $_REQUEST['age'];

            $results = $project_dao->add($first_name, $last_name, $age);

            print_r($results);

            break;

        case 'delete':

            $id = $_REQUEST['id'];

            $project_dao->delete($id);

            break;

        case 'update':

            $first_name = $_REQUEST['first_name'];

            $last_name = $_REQUEST['last_name'];

            $age = $_REQUEST['age'];

            $id = $_REQUEST['id'];

            $project_dao->update($first_name, $last_name, $age, $id);

            break;

        case 'get':

        default:

            $results = $project_dao->get_all();

            print_r($results);

            break;

    }
?>