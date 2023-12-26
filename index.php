<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Formatando Máscara de campos input com javascript</title>
</head>

<body>
    <div class="container">
        <h3>Como formatar máscaras de campos input com Javascricpt</h3>

        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone" class="form-control">

        <label for="cpf">CPF</label>
        <input type="text" name="cpf" id="cpf" class="form-control">

        <label for="cep">CEP</label>
        <input type="text" name="cep" id="cep" class="form-control">

        <label for="valor">Valor ou Porcentagem</label>
        <input type="text" name="valor" id="valor" class="form-control">
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>

    <script src="jquery.mask.min.js"></script>

    <script>
        $('#telefone').mask('(00) 00000-0000');
        $('#cpf').mask('000.000.000-00');
        $('#cep').mask('00.000-000');
        $('#valor').mask('#.##0,00', {
            reverse: true
        });
    </script>
</body>

</html>