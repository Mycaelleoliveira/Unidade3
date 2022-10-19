<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <style>
  body {
    font-family: 'Roboto';
  }

  fieldset {
    width: calc(25% - 67px);
    border: solid 1px #ddd;
    border-radius: 5px;
  }

  div {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
  }

  form {
    text-align: center;
  }

  legend {
    background: #fff;
    color: #000;
  }

  button {
    width: 150px;
    height: 40px;
    margin: 0 auto;
    background: #666;
    border: none;
    color: #fff;
    font-weight: bold;
    border-radius: 10px;
    margin-top: 15px;
  }

  button:hover {
    cursor: pointer;
  }

  input {
    border: solid 1px #ddd;
    height: 25px;
    padding: 3px 10px;
  }

  .acima {
    background: green;
    color: #fff;
  }

  .abaixo {
    background: red;
    color: #fff;
  }

  .media {
    background: lime;
    color: #fff;
  }
  </style>
</head>

<body>
  <?php
    $alunos = 8;
  ?>
  <form method="post">
    <?php
      $media = 0;
      
      if (isset($_POST["notas"])) {
        $notas = $_POST["notas"];
        $soma = 0;
        
        foreach ($notas as $nota) {
          $soma += $nota;
        }

        $media = $soma / count($notas);
      }
    ?>
    <div>
      <?php
        $nomes = $_POST["nomes"];
        $notas = $_POST["notas"];
        for ($i = 1; $i <= $alunos; $i++) {
          $nome = $nomes[$i - 1];
          $nota = $notas[$i - 1];

          if ($nota > $media) {
            $alunomedia = "acima";
          } elseif ($nota < $media) {
            $alunomedia = "abaixo";
          } else {
            $alunomedia = "media";
          }
      ?>
      <fieldset class="<?php echo $alunomedia; ?>">
        <legend>Aluno n° <?php echo $i; ?></legend>
        <label>Insira o nome do aluno:
          <input type="text" name="nomes[]" value="<?php echo $nome; ?>" placeholder="Ex: Joao" required />
        </label>
        <br /><br />
        <label>Insira a nota do aluno:
          <input type="text" name="notas[]" min="0" max="10" value="<?php echo $nota; ?>" placeholder="Ex: 7.1"
            required />
        </label>

        <br /><br />

        <?php
          if ($alunomedia == "acima") {
            echo "Nota do aluno acima da media.";
          } elseif ($alunomedia == "abaixo") {
            echo "Nota do aluno abaixo da media.";
          } elseif ($alunomedia == "media") {
            echo "Aluno na media";
          }
        ?>

      </fieldset>
      <?php
        }
      ?>
    </div>
    <?php
    echo "<br/>A media da turma e : " .$media. "<br/>";
    ?>
    <button type="submit">Calcular media</button>

  </form>
</body>

</html>