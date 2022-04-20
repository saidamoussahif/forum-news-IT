@extends('admin.layout.SideBar')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Styles -->
    <style>
       .edit{
            font-size: 25px;
            color:green;
        }
        .delete{
            font-size: 25px;
            color:red;
        }
    </style>
    <link href="{{ asset('css/post.css') }}" rel="stylesheet">
    <title>post</title>
</head>

<body>
    <div class="container-fluid text-light mt-6 ">
        <!-- <div class="table-responsive"> -->
        <div class="table-wrapper">
            <div class="table-title">
                <div class="container-fluid ">
                    <div class="row ">
                        <div class="col-lg-12">
                            <div class="card ">
                                <table class="table table-xs mb-5">
                                    <thead class=" container bg-light w-5">
                                        <tr>
                                    
                                            <!-- <th scope="col" style="color:#CC9544;">D_time</th>  -->
                                            <th scope="col" style="color:#084594;">#</th>
                                            <th scope="col" style="color:#084594;">Title</th>
                                            <th scope="col" style="color:#084594;">Content</th>
                                            <th scope="col" style="color:#084594;">Image</th>
                                            <th scope="col" style="color:#084594;">Action</th>
                                            <!-- <th scope="col" style="color:#5D8BF4;">Cancel</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                           <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td> <!-- <a href=""><ion-icon class="edit" name="create-outline"></ion-icon></a> -->
                                                <a href=""><ion-icon  class="delete"  name="close-outline"></ion-icon></a></td>
                                            </tr>
                                    </tbody>
                                </table>
                            </div>               
                         </div>
                    </div>
                </div>
</body>

</html>