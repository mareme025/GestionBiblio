<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/brands.min.css"
 integrity="sha512-dBL5cY4qTt42J1cfabCHTYR7KMztyd+n4t2GhD6EH/MKWJIIHuEYckJ1nHEpTwIaiDkrjzbc6WyiSkdLP+3INQ==" crossorigin="anonymous" />
 <style>
 
iframe{
       width:100%;
       height:70em;
       border:2px solid black;
       margin-left:-5px;    
 }
 button{
    

  position: relative;!important
  top: 40px;!important
  left:90em;!important
 }

</style>
<a href="http://localhost:8000/Livre"><button type="button"   class="btn btn-danger">Fermer</button></a>

              <iframe src="{{url('documents/'.$document['fichierDocument'])}}#toolbar=0"></iframe>
                   
</iframe>
                        
   