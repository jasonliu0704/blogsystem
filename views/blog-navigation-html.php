<?php
return
"
<nav class='navbar navbar-inverse narbar-fixed-top'>
        <div class='container-fluid'>
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class='navbar-header'>
                <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' 
                data-target='#navbar' aria-expended='false' aria-controls='navbar'>
                    <span class='sr-only'>Toggle navigation</span>
                    <span class='icon-bar'></span>
                    <span class='icon-bar'></span>
                    <span class='icon-bar'></span>
                </button>
                <a class='navbar-brand' href='index.php'>Triton Voice</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div id='navbar' class='collapse navbar-collapse'>
                <ul class='nav navbar-nav navbar-right'>
                    <li>
                        <a href='index.php'>Blog</a>
                    </li>
                    <li>
                        <a href='about.html'>About</a>
                    </li>
                    <li>
                        <a href='admin.php'>Manage</a>
                    </li>
                    <li>
                        <a href='contact.html'>Contact</a>
                    </li>
                </ul>
            
            <form class='navbar-form navbar-right' method='post' action='index.php?page=search' role='search'>
            
                <input type='text' name='search-term' class='form-control' placeholder='Search'>
            
            
            </form>
            <!-- /.navbar-collapse -->
        </div>
    </div>
        <!-- /.container -->
</nav>
";
