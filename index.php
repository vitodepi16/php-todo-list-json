<?php



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <link rel="stylesheet" href="./style/style.css">
    <title>To do Lit</title>
</head>

<body>
    <div id="app">
        <div class="container">
            <div class="header">
                <div>
                    <button class="btn btn-primary d-flex justify-content-end ">Login</button>
                </div>

                <h1 class="text-center fs-2 p-3">{{title}}</h1>
                <p class="fs-6 text-center fw-light  ">Scrivi la tua lista di cose da fare, resterà privata, in modo tale che nessuno oltre che te possa vederela</p>
            </div>

            <div class="row">
                <div class="col-12 col-lg-10 col-md-6 col-sm-3">
                    <div class="input-group">
                        <input @keyup.enter="updateList" type="text" v-model="todoItem" class="form-control ms-3" name="" id="">
                        <button class="btn btn-primary ms-5" id="button-add" @click="updateList">Inserisci </button>
                    </div>
                </div>
            </div>
            <div class="zone-list d-flex justify-content-between  ">
                <div class="col">
                    <div v-for="(todo,index) in todoList" @click="completedAction(index)" :class="todoItem.done ? 'text-decoration-line-through': '' " class="p-2
                      fs-6 m-3 card card-title">
                        <p> {{todo}}</p>
                        <div class="card-link"><button class="btn btn-success">Done</button>
                            <button @click.stop="deleteItem(index)" class="btn btn-outline-danger ms-5">Cancella</button>
                        </div>
                    </div>

                </div>


            </div>

        </div>






    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="./js/script.js"></script>
</body>

</html>