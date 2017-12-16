
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
	<title>NewsAndComments</title>
</head>
<body>

<div id="app" class="row">
    
    <span v-bind:class="coverClass()">{{ greet() }}</span>
    <div v-on:click="toggle()" v-bind:class="coverClass()"></div>

<div class="jumbotron col-md-10 col-md-offset-1">
    
    <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">

           
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#testapp-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar" v-for="n in nav"></span>
                    </button>

                </div>

                <div class="collapse navbar-collapse" id="testapp-navbar-collapse">
                   
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>
                     <ul class="nav navbar-nav">
                      <li v-on:click="toggle()" v-for="n in nav"><a href="#">{{ n }}</a></li>
                      
                    </ul>

                    <ul class="nav navbar-nav navbar-right">

                        	
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                     <span>Username</span> <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li v-on:click="toggle()" v-for="d in drop"><a href="#">{{ d }}</a></li>
                                </ul>
                            </li>
                    
                    </ul>
                   
                </div>
            </div>
        </nav>
        <div id="title">
			<h1 class="text-center">{{ title }}</h1>
		</div>
		<div class="container-fluid">