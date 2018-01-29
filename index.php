<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Trello</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <link rel="stylesheet" href="css/styles.css">

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>
<body>
    <header>
        <nav>
            <div class="burger padding-r10">
                <div class="line"></div>
            </div>
            boards
        </nav>
        <div>
            <i class="fa fa-search padding-r10" aria-hidden="true"></i>
            <input type="text" placeholder="Search...">
        </div>
        <a  href="index.html" class="logo">
            <img src="images/logo.png" alt="Logo Trello">
        </a>
        <a class="div-header">
            <i class="fa fa-plus padding-r10" aria-hidden="true"></i>
            <span>Create</span>
        </a>
        <div class=" div-header">
            <a href="#" class="name">
                <div class="padding-r10">
                    <span class="initiale">pk</span>
                </div>
                <p>Piotr Kmita</p>
            </a>
        </div>
        <a  href="#" class="bell">
            <i class="fa fa-bell-o padding-l10" aria-hidden="true"></i>
        </a>
    </header>

    <main>
        <header>
            <div class="title-main">
                <i class="fa fa-star padding-r10" aria-hidden="true"></i>
                <h1>Team Stormer beta developement - first phase </h1>
            </div>
            <div class="main-header-end">
                <div class="button">
                    <i class="fa fa-paperclip padding-r10" aria-hidden="true"></i>
                    <a href="" target="_blank">https://trello.com</a>
                </div>
                <div class="button">
                    <i class="fa fa-lock padding-r10" aria-hidden="true"></i>
                    <a href="">Private</a>
                </div>
            </div>
        </header>

        <div class="container-list">
            <!------------ LIST 1 ---------------->
            <article  id="list1" class="list">
                <header>
                    <h2 class="title-list">Backlog</h2>
                    <div class="container-more">
                        <div class="more"></div>
                    </div>
                </header>
                <ul class="container-cards">
                    <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "root";
                        $dbname = "Trello";

                        try {
                            //for windows
                            //$db = new PDO('mysql:host=' . $servername . ';dbname=' . $dbname . ';charset=utf8', $username, '');
                            //for mac
                            $db = new PDO('mysql:host=' . $servername . ';dbname=' . $dbname . ';charset=utf8', $username, $password);
                        } catch(Exception $e) {
                            die("Error: ". $e);
                        }

                        $save = $db->query('SELECT content FROM card ORDER BY position');

                        while ($data = $save->fetch()){
                            ?>
                            <li class="card">
                                <p>
                                    <?php
                                        echo $data['content'];
                                    ?>
                                </p>
                            </li>
                    <?php
                        }
                    ?>

                </ul>
                <form class="formNewCard" action="#" method="POST">
                    <textarea name="inputForm" cols="30" rows="10"></textarea>
                    <input type="submit">
                    <button class="canceled">Annulé</button>
                </form>
                <div class="add">
                    Add new ticket...
                </div>
            </article>

            <!------------ LIST 2 ---------------->
            <article id="list2" class="list">
                <header>
                    <h2 class="title-list">DESIGN SPRINT #7</h2>
                    <div class="container-more">
                        <div class="more"></div>
                    </div>
                </header>
                <ul class="container-cards">
                    <li class="card">
                        <div class="bg-star">
                            <i class="fa fa-star star" aria-hidden="true"></i>
                        </div>
                        <p>Etiam a mollis ante, vel placerat odio. Nullam dignissim magna neque, sit amet porttitor leo pellentesque sed. </p>
                        <footer>
                            <div class="info-card">
                                <i class="fa fa-comment-o" aria-hidden="true"></i>
                                <div class="number">
                                    1
                                </div>
                            </div>
                        </footer>
                    </li>
                    <li class="card">
                        <p>Etiam a mollis ante, vel placerat odio. Nullam dignissim magna neque, sit amet porttitor leo pellentesque sed. </p>
                        <footer>
                            <div class="info-card">
                                <i class="fa fa-comment-o" aria-hidden="true"></i>
                                <div class="number">
                                    2
                                </div>
                            </div>
                            <div class="info-card">
                                <i class="fa fa-paperclip" aria-hidden="true"></i>
                                <div class="number">
                                    2
                                </div>
                            </div>
                        </footer>
                    </li>
                </ul>
                <form class="formNewCard" action="#" method="POST">
                    <textarea name="inputForm" cols="30" rows="10"></textarea>
                    <input type="submit">
                    <button class="canceled">Annulé</button>
                </form>
                <div class="add">
                    Add new ticket...
                </div>
            </article>

            <!------------ LIST 3 ---------------->
            <article class="list">
                <header>
                    <h2 class="title-list">Backlog</h2>
                    <div class="container-more">
                        <div class="more"></div>
                    </div>
                </header>
                <ul class="container-cards">
                    <li class="card">
                        <i class="fa fa-bookmark mark green" aria-hidden="true"></i>
                        <p>Etiam a mollis ante, vel placerat odio. Nullam dignissim magna neque, sit amet porttitor leo pellentesque sed. </p>
                        <footer>
                            <div class="info-card">
                                <i class="fa fa-comment-o" aria-hidden="true"></i>
                                <div class="number">
                                    1
                                </div>
                            </div>
                        </footer>
                    </li>
                    <li class="card">
                        <p>Etiam a mollis ante, vel placerat odio. Nullam dignissim magna neque, sit amet porttitor leo pellentesque sed. </p>
                        <footer>
                            <div class="info-card">
                                <i class="fa fa-comment-o" aria-hidden="true"></i>
                                <div class="number">
                                    2
                                </div>
                            </div>
                            <div class="info-card">
                                <i class="fa fa-paperclip" aria-hidden="true"></i>
                                <div class="number">
                                    2
                                </div>
                            </div>
                        </footer>
                    </li>
                    <li class="card">
                        <i class="fa fa-bookmark mark red" aria-hidden="true"></i>
                        <p>Etiam a mollis ante, vel placerat odio. Nullam dignissim magna neque, sit amet porttitor leo pellentesque sed. </p>
                        <footer>
                            <div class="info-card">
                                <i class="fa fa-comment-o" aria-hidden="true"></i>
                                <div class="number">
                                    2
                                </div>
                            </div>
                            <div class="info-card">
                                <i class="fa fa-paperclip" aria-hidden="true"></i>
                                <div class="number">
                                    2
                                </div>
                            </div>
                        </footer>
                    </li>
                    <li class="card">
                        <p>Etiam a mollis ante, vel placerat odio. Nullam dignissim magna neque, sit amet porttitor leo pellentesque sed. </p>
                        <footer>
                            <div class="info-card">
                                <i class="fa fa-comment-o" aria-hidden="true"></i>
                                <div class="number">
                                    1
                                </div>
                            </div>
                        </footer>
                    </li>
                </ul>
                <form class="formNewCard" action="#" method="POST">
                    <textarea name="inputForm" cols="30" rows="10"></textarea>
                    <input type="submit">
                    <button class="canceled">Annulé</button>
                </form>
                <div class="add">
                    Add new ticket...
                </div>
            </article>

            <!------------ LIST 4 ---------------->
            <article class="list">
                <header>
                    <h2 class="title-list">DEV SPRINT #13</h2>
                    <div class="container-more">
                        <div class="more"></div>
                    </div>
                </header>
                <ul class="container-cards">
                    <li class="card">
                        <i class="fa fa-bookmark mark blue" aria-hidden="true"></i>
                        <p>Etiam a mollis ante, vel placerat odio. Nullam dignissim magna neque, sit amet porttitor leo pellentesque sed. </p>
                        <footer>
                            <div class="info-card">
                                <i class="fa fa-comment-o" aria-hidden="true"></i>
                                <div class="number">
                                    1
                                </div>
                            </div>
                        </footer>
                    </li>
                    <li class="card">
                        <i class="fa fa-bookmark mark blue" aria-hidden="true"></i>
                        <p>Etiam a mollis ante, vel placerat odio. Nullam dignissim magna neque, sit amet porttitor leo pellentesque sed. </p>
                        <footer>
                            <div class="info-card">
                                <i class="fa fa-comment-o" aria-hidden="true"></i>
                                <div class="number">
                                    2
                                </div>
                            </div>
                            <div class="info-card">
                                <i class="fa fa-paperclip" aria-hidden="true"></i>
                                <div class="number">
                                    2
                                </div>
                            </div>
                        </footer>
                    </li>
                    <li class="card">
                        <p>Etiam a mollis ante, vel placerat odio. Nullam dignissim magna neque, sit amet porttitor leo pellentesque sed. </p>
                        <footer>
                            <div class="info-card">
                                <i class="fa fa-comment-o" aria-hidden="true"></i>
                                <div class="number">
                                    1
                                </div>
                            </div>
                        </footer>
                    </li>
                    <li class="card">
                        <p>Etiam a mollis ante, vel placerat odio. Nullam dignissim magna neque, sit amet porttitor leo pellentesque sed. </p>
                        <footer>
                            <div class="info-card">
                                <i class="fa fa-comment-o" aria-hidden="true"></i>
                                <div class="number">
                                    1
                                </div>
                            </div>
                        </footer>
                    </li>
                    <li class="card">
                        <p>Etiam a mollis ante, vel placerat odio. Nullam dignissim magna neque, sit amet porttitor leo pellentesque sed. </p>
                        <footer>
                            <div class="info-card">
                                <i class="fa fa-comment-o" aria-hidden="true"></i>
                                <div class="number">
                                    1
                                </div>
                            </div>
                        </footer>
                    </li>
                </ul>
                <form class="formNewCard" action="#" method="POST">
                    <textarea name="inputForm" cols="30" rows="10"></textarea>
                    <input type="submit">
                    <button class="canceled">Annulé</button>
                </form>
                <div class="add">
                    Add new ticket...
                </div>
            </article>

            <!------------ LIST 5 ---------------->
            <article class="list">
                <header>
                    <h2 class="title-list">Accepted</h2>
                    <div class="container-more">
                        <div class="more"></div>
                    </div>
                </header>
                <ul class="container-cards">
                    <li class="card">
                        <p>Etiam a mollis ante, vel placerat odio. Nullam dignissim magna neque, sit amet porttitor leo pellentesque sed. </p>
                        <footer>
                            <div class="info-card">
                                <i class="fa fa-comment-o" aria-hidden="true"></i>
                                <div class="number">
                                    1
                                </div>
                            </div>
                        </footer>
                    </li>
                    <li class="card">
                        <p>Etiam a mollis ante, vel placerat odio. Nullam dignissim magna neque, sit amet porttitor leo pellentesque sed. </p>
                        <footer>
                            <div class="info-card">
                                <i class="fa fa-comment-o" aria-hidden="true"></i>
                                <div class="number">
                                    2
                                </div>
                            </div>
                            <div class="info-card">
                                <i class="fa fa-paperclip" aria-hidden="true"></i>
                                <div class="number">
                                    2
                                </div>
                            </div>
                        </footer>
                    </li>
                    <li class="card">
                        <i class="fa fa-bookmark mark red" aria-hidden="true"></i>
                        <p>Etiam a mollis ante, vel placerat odio. Nullam dignissim magna neque, sit amet porttitor leo pellentesque sed. </p>
                        <footer>
                            <div class="info-card">
                                <i class="fa fa-comment-o" aria-hidden="true"></i>
                                <div class="number">
                                    1
                                </div>
                            </div>
                        </footer>
                    </li>
                </ul>
                <form class="formNewCard" action="#" method="POST">
                    <textarea name="inputForm" cols="30" rows="10"></textarea>
                    <input type="submit">
                    <button class="canceled">Annulé</button>
                </form>
                <div class="add">
                    Add new ticket...
                </div>
            </article>

            <!------------ LIST 6 ---------------->
            <article class="list">
                <header>
                    <h2 class="title-list">Backlog</h2>
                    <div class="container-more">
                        <div class="more"></div>
                    </div>
                </header>
                <ul class="container-cards">
                    <li class="card">
                        <p>Etiam a mollis ante, vel placerat odio. Nullam dignissim magna neque, sit amet porttitor leo pellentesque sed. </p>
                        <footer>
                            <div class="info-card">
                                <i class="fa fa-comment-o" aria-hidden="true"></i>
                                <div class="number">
                                    1
                                </div>
                            </div>
                        </footer>
                    </li>
                    <li class="card">
                        <p>Etiam a mollis ante, vel placerat odio. Nullam dignissim magna neque, sit amet porttitor leo pellentesque sed. </p>
                        <footer>
                            <div class="info-card">
                                <i class="fa fa-comment-o" aria-hidden="true"></i>
                                <div class="number">
                                    2
                                </div>
                            </div>
                            <div class="info-card">
                                <i class="fa fa-paperclip" aria-hidden="true"></i>
                                <div class="number">
                                    2
                                </div>
                            </div>
                        </footer>
                    </li>
                    <li class="card">
                        <p>Etiam a mollis ante, vel placerat odio. Nullam dignissim magna neque, sit amet porttitor leo pellentesque sed. </p>
                        <footer>
                            <div class="info-card">
                                <i class="fa fa-comment-o" aria-hidden="true"></i>
                                <div class="number">
                                    1
                                </div>
                            </div>
                        </footer>
                    </li>
                </ul>
                <form class="formNewCard" action="#" method="POST">
                    <textarea name="inputForm" cols="30" rows="10"></textarea>
                    <input type="submit">
                    <button class="canceled">Annulé</button>
                </form>
                <div class="add">
                    Add new ticket...
                </div>
            </article>
        </div>
    </main>

    <script>
        $( ".container-list" ).sortable()
        $( ".container-list" ).disableSelection();

       $( ".list ul" ).sortable({
           connectWith: ".container-cards",
           placeholder: "ui-state-highlight",
           /*update: function( event, ui ) {
               for(var i = 0; i < board.length; i++){
                   array1.findIndex
               }
           }*/
       }).disableSelection();

       $('.add').on('click', function () {
           $(this).fadeOut('slow', function () {
               $(this).parent().find('.formNewCard').fadeIn("slow")
           })
       })

        $('.canceled').on('click', function () {
            $('.formNewCard textarea').val('')
            $('.formNewCard').fadeOut("slow")
            $('.add').fadeIn('slow')
        })

        var httpRequest = new XMLHttpRequest()

        var form = document.querySelectorAll('.formNewCard')

        for(var i = 0; i < form.length; i++){
            form[i].addEventListener('submit', function(e){
                e.preventDefault()
                var thisForm = this

                if ($(this).find('textarea').val()){
                    httpRequest.onreadystatechange = function(){
                        if(httpRequest.readyState === 4){
                            if(httpRequest.responseText != ''){
                                $(thisForm).parent().find('ul').append('<li class="card"> '+httpRequest.responseText+' </li>') //création card
                                function clear () {
                                    $('.formNewCard textarea').val('')
                                    $('.formNewCard').fadeOut("slow")
                                    $('.add').fadeIn('slow')
                                }
                                clear()
                            }
                        }
                    }
                    httpRequest.open('POST', 'app.php', true) // true = async | false = sync : bloque l'éxecution du JS
                    var data = new FormData(thisForm) // On passe le form dans FormData
                    httpRequest.send(data)
                }
            })
        }




        /*
        var form = $('#formNewCard');
        //au submit je lance une fonction
       form.submit(function(e){
            e.preventDefault() //je ne lance pas la fonction par défaut (la page ne se recharge pas)

        //ajax relie back et front sans recharger la page
        //je lance une méthode ajax
        var data = $(this).serialize();
        $.ajax({
            method : 'POST',
            url : 'app.php',
            data : data, /*{name = valeur}*/
        /*dataType :"json",*/
        /*success: function(msg){

            //si ajax fonctionne je lance la fonction qui créé une carte
            var cardContent = $('textarea').val()//je récup la valeur du textarea
            $('textarea').val('')
            var newTicket = $('<li class="ticket">'+cardContent+'</li>')//var privée qui créé un élément en jquery (ne peut pas être appelée en dehors de la fonction

            $('#result > ul').append(newTicket)
        }

        })


        })
         */
    </script>
</body>
</html>