<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>criando pergunta</title>
    <link rel="stylesheet" href="public/css/create_question.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >

    <script defer src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script defer src="create_question.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>

</head>
<body>

    <main id="container-main">


    <form id="formulario" method="POST" action="response.php" class="mb-3 row g-3" method="POST">
  <div class="mb-3">

            <label class="form-label" for="input-pergunta">Pergunta: </label>
            <input type="text" class="form-control" id="input-pergunta" name="input-pergunta" value="">


            <label for="respostas" class="form-label" >Respostas: </label>


            <div class="row">

            <div class="col-10">
            <input type="text" id="resposta" name="respostas[]" class="form-control">
            </div>

            <div class="col-auto">
            <button id="btn-respostas" class="btn btn-primary">+</button> 
            </div>


            <label for="disabledSelect" class="form-label">Alternativa Correta</label>

      <div class="col-10">

      <select id="selectAlternativaCorreta" name="alternativaCorreta" class="form-select">
                <option value="" disabled>Selecione a alternativa correta</option>        
    </select>

      </div>


      <div class="col-auto">
        <button id="btn-respostas-excluir" class="btn btn-danger">-</button> 
      </div>

      <div id="inputs"></div>

      <div class="col-auto mt-3">
      <button id="btn-submit" type="submit" class="btn btn-success">Submit</button>
      </div>


    


    
  </div>       
        

    </div>
        

</form>

    </main>

    
</body>
</html>


