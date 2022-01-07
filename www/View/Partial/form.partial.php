<form method="<?= $config["config"]["method"]??"POST" ?>"
      action="<?= $config["config"]["action"]??""?>"
      id="<?= $config["config"]["id"]??""?>"
      class="<?= $config["config"]["class"]??""?>">



    <?php foreach ($config["inputs"] as $name=>$input) :?>

        <input name="<?= $name ?>"
               class="<?= $input["class"]??"" ?>"
               id="<?= $input["id"]??"" ?>"
               placeholder="<?= $input["placeholder"]??"" ?>"
               type="<?= $input["type"]??"text" ?>"
            <?= !empty( $input["required"])?'required="required"':""  ?>
        ><br>

    <?php endforeach;?>

    <input type="submit" value="<?= $config["config"]["submit"]??"Envoyer"?>">
</form>