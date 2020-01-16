
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <title><?=sitename?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>

<?php if(isset($_POST['submit'])) {
    if($_POST['bagazas'] > 20) {
        $kaina = $_POST['price'] + 30;
    }else {
        $kaina = $_POST['price'];
    }
}
$skrydzioNr = [481, 564, 541, 984, 123, 784, 521, 874];
for ($i =1; $i<51; $i++){
    $bagazas[$i] = $i;
}
//$bagazas = [0, 10, 20, 30, 40];
$isKur = ['Kaunas', 'Vilnius', 'Berlynas', 'Bristolis', 'Varšuva', 'Oslas'];
$iKur = ['Kaunas', 'Vilnius', 'Berlynas', 'Bristolis', 'Varšuva', 'Oslas'];
?>



<div class="row">
    <form class="col-3" method="POST">
        <div class="form-group">
            <label>Skrydzio numeris</label>
            <select name="skrydis" class="form-control">
                <?php foreach($skrydzioNr as $skrydis): ?>
                    <option value="<?=$skrydis;?>"><?=$skrydis;?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label>Asmens Kodas</label>
            <input name="akodas" type="text" class="form-control" placeholder="Asmens Kodas" required>
        </div>
        <div class="form-group">
            <label>Vardas Pavardė</label>
            <input name="name" type="text" class="form-control" placeholder="Vardas Pavardė" required>
        </div>
        <div class="form-group">
            <label>Skrydis iš</label>
            <select name="isKur" class="form-control">
                <?php foreach($isKur as $from): ?>
                    <option value="<?=$from;?>"><?=$from;?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label>Skrydis į</label>
            <select name="iKur" class="form-control">
                <?php foreach($iKur as $to): ?>
                    <option value="<?=$to;?>"><?=$to;?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label>Kaina</label>
            <input name="price" type="text" class="form-control" placeholder="Kaina" required>
        </div>
        <div class="form-group">
            <label>Bagažas(Kg)</label>
            <select name="bagazas" class="form-control">
                <?php foreach($bagazas as $bgz): ?>
                    <option value="<?=$bgz;?>"><?=$bgz;?> Kg</option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label>Pastabos</label>
            <textarea name='pastabos' class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button name="submit" type="submit" class="btn btn-primary" >Pateikti</button>
    </form>
    <section class="col-9">
        <?php if(isset($_POST['submit'])):?>
        <p>Skrydzio numeris: <?=$_POST['skrydis'];?>
        <p>Asmens kodas: <?=$_POST['akodas'];?>
        <p>Vardas Pavardė: <?=$_POST['name'];?>
        <p>Skrenda iš: <?=$_POST['isKur'];?>
        <p>Skrenda į: <?=$_POST['iKur'];?>
        <p>Kaina: <?=$kaina;?>
        <p>Bagažas: <?=$_POST['bagazas'];?>
        <p>Pastabos: <?=$_POST['pastabos'];?>
            <?php endif;?>
        <div class="ticket row">
            <div class="ticketinside col-7">

            </div>
            <div class="ticketinside2 col-5">

            </div>
        </div>
    </section>

</div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>