@extends('template')

@section('css')

    <style>
        /*
    default element
*/
body{
    margin: 0;
    padding: 0;
    font-family: 'Roboto', sans-serif;
    color: #707070;
}

a{
    text-decoration: none;
}

/*
    container & global élément of container
*/
.container{
    display: flex;
    flex-direction: column;
}

#connexion, #inscription{
    height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.title{
    font-size: 2em;
    margin: 0;
}
.paragraphe{
    margin: 20px 0;
    text-align: center;
    margin-left: 15px;
    margin-right: 15px;
}
.paragraphe{
    opacity: 0.81;
    font-size: 18px;
}
.btn-link, input[type="submit"]{
    display: block;
    line-height: 60px;
    border: 1px solid  #fff;
    width: 230px;
    height: 60px;
    text-align: center;
    border-radius: 9999px;
    color: #fff;
    font-size: 20px;
    font-weight: lighter;
    transition: .2s;
    cursor: pointer;
    margin-top: 20px;
}
/*
    connexion
*/
#connexion{
    background: #198EF5;
    text-align: center;
}

#connexion .title{
    color: #fff;
    /*margin-top: -300px;*/
}

#connexion .paragraphe{
    color: #fff;
    font-size: 1em;
    margin-top: -10px;
}
#connexion .connexion:hover{
    background-color: #fff;
    color: #198EF5;
}
/*
    inscription
*/

#inscription .title{
    color: #198EF5;
    margin-top: -30px;
}

.rad{
    word-spacing: 30px;
    margin-bottom: 20px;
    margin-left: 5px;
}

.group-form{
    /*margin-bottom: 10px;*/
    position: relative;


}

.group-form > div{
    position: absolute;
    width: 40px;
    height: 40px; 
    top: 2px;
    left: 3px;

    
}

.group-form .icon-user{
    background: url(../images/user.png);
    background-size: cover;
    background-position: center;
    
}

.group-form .icon-mail{
    background: url(../images/mail.png);
    background-size: cover;
    background-position: center;
}

.group-form .icon-password{
    background: url(../images/password.png);
    background-size: cover;
    background-position: center;
}
.group-form input[type="number"],
.group-form input[type="text"],
.group-form input[type="email"],
.group-form input[type="password"]{
    width: 250px;
    height: 40px;
   /* border: 1px solid #707070;*/
   /* border-radius: 9999px;*/
    padding-left: 15px;
    outline: none;
    font-size: 16px;
    border: none;
    border-bottom: 2px #ddd solid;
}
#inscription{
    transition: 0.5s;
}
#inscription:hover{
    transform: scale(1.1);
}

#inscription .inscription{
    background: #198ef5;
    margin: 0 auto;
    margin-top: 20px;
}

#inscription .inscription:hover{
    background: #fff;
    color: #198EF5;
    border: 1px solid #198EF5;
}

@media (min-width: 992px){
    .container{
        flex-direction: row;
    }

    #connexion{
        width: 45%;
        text-align: center;
    }

    #inscription{
        width: 55%;
    }
}
    </style>

@endsection

@section('contenu')

    <div class="container">
  <div id="connexion">

    <h1 class="title">Hellø Wørld</h1>
    <p class="paragraphe">
      Veuillez entrer vos détails personnel et démarrez la navigation sur notre plateforme
    </p>
    <a href="#" class="btn-link connexion">Se connecter</a>
  </div>
<form action="route{{}}" method="post"></form>
  <div id="inscription">
    <h1 class="title">Créer un compte</h1>
    <p class="paragraphe">
      Veuillez remplir tous les champs selon votre status
    </p>

    <p class="rad">
        <label for="status">
             <input type="radio" name="status" id="">Client
        </label>
        <label for="status">
             <input type="radio" name="status" id="">Styliste
        </label>
        <label for="status">
             <input type="radio" name="status" id="">Vendeur
        </label>
    </p>

    <form class="formulaire">


      <div class="group-form">
        <input class="input @error('nom') is-danger @enderror" name="nom" value="{{ old('nom') }}" type="text" placeholder="Nom">
        <div class="icon-user"></div>
      </div>

     @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


      <div class="group-form">
        <input type="text" placeholder="Prenoms" class="input @error('prenoms') is-danger @enderror" name="prenom" value="{{ old('prenom') }}" >
        <div class="icon-user"></div>
      </div>
      @error('prenom')
             <p class="help is-danger">{{ $message }}</p>
     @enderror
      <div class="group-form">
        <input type="email" placeholder="Email"  class="input @error('email') is-danger @enderror" name="email" value="{{ old('email') }}">
        <div class="icon-mail"></div>
      </div>
      @error('email')
             <p class="help is-danger">{{ $message }}</p>
     @enderror
      <div class="group-form">
        <input type="number" placeholder="Téléphone"  class="input @error('telephone') is-danger @enderror" name="telephone" value="{{ old('telephone') }}">
        <div class="icon-user"></div>
      </div>
      @error('telephone')
             <p class="help is-danger">{{ $message }}</p>
     @enderror
      <div class="group-form">
        <input type="text" placeholder="Adresse"  class="input @error('adresse') is-danger @enderror" name="adresse" value="{{ old('adresse') }}">
        <div class="icon-user"></div>
      </div>
      @error('adresse')
             <p class="help is-danger">{{ $message }}</p>
     @enderror
      <div class="group-form">
        <input type="password" placeholder="Password"  class="input @error('password') is-danger @enderror" name="password" value="{{ old('password') }}">
        <div class="icon-password"></div>
      </div>
      @error('password')
             <p class="help is-danger">{{ $message }}</p>
     @enderror
      <div class="group-form">
        <input type="submit" class="inscription" value="S'inscrire">
      </div>
    </form>
  </div>
</div>

@endsection