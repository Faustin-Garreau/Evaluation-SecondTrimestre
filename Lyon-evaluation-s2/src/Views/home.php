<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>
<body>
    <header>
        <nav>
                <p><bold>𝙿𝚘𝚛𝚝𝚏𝚘𝚕𝚒𝚘</bold></p>
            <ul>
                    <li><a href="#comp">𝙲𝚘𝚖𝚙𝚎𝚝𝚎𝚗𝚌𝚎𝚜</a></li>
                    <li><a href="#proj">𝙿𝚛𝚘𝚓𝚎𝚝𝚜</a></li>
                    <li><a href="#form_contact">𝙲𝚘𝚗𝚝𝚊𝚌𝚝</a></li>
            </ul>
        </nav>
        <h1>𝙱𝚒𝚎𝚗𝚟𝚎𝚗𝚞𝚎 𝚜𝚞𝚛 𝚖𝚘𝚗 𝚙𝚘𝚛𝚝𝚘𝚏𝚕𝚒𝚘</h1>
            <p class="moi">𝙼𝚘𝚒 𝚌'𝚎𝚜𝚝 𝚏𝚊𝚞𝚜𝚝𝚒𝚗 !</p>
                <div id="image">
                    <img src="<?php echo $images->getImage();?>" alt="image faustin">
                </div>
            <div id="images">
                <a href="#moi">
                    <button class="button_me">𝙴𝚗 𝚜𝚊𝚟𝚘𝚒𝚛 𝚙𝚕𝚞𝚜</button>
                </a>
            </div>
    </header>
        <hr>
    <main id="moi">
        <h2>𝙐𝙣 𝙥𝙚𝙪 𝙥𝙡𝙪𝙨 𝙨𝙪𝙧 𝙢𝙤𝙞</h2>
            <hr class="trait">
                <p id="more"><?php echo $propos->getPropos();?></p>
    </main>
        <hr>
    <section>
        <h2 id="comp">𝙈𝙚𝙨 𝙘𝙤𝙢𝙥é𝙩𝙚𝙣𝙘𝙚𝙨</h2>
            <div class="compétences">
                <?php  foreach ($competences as $competence) { ?>
                    <h2 class="taille_comp"><?php echo $competence->getCompetences();?></h2>
                <?php  } ?>
            </div>
    </section>
    <hr>
    <section>
        <h2 id="proj">𝘔𝘦𝘴 𝘱𝘳𝘰𝘫𝘦𝘵𝘴</h2>
            <div id="projets">
            <?php  foreach ($projets as $projet) { ?>
                <h2><a class="project" href="<?php echo $projet->getLink(); ?>"><?php echo $projet->getTitre(); ?></a></h2>
            <?php } ?>
            </div>
    </section>
    <hr>
    <footer>
        <h2 class="contact">Contact</h2>

        <form action="/contact" id="form_contact" method="POST">
            <div>
                <input class="email" name="email" type="text" placeholder="email">
                <p class="contact_errors"><?php echo isset($_SESSION["errors"]["email"]) ? $_SESSION["errors"]["email"] : "";?></p>
                <textarea class="message" name="message" cols="30" rows="10" placeholder="messages"></textarea>
                <p class="contact_errors"><?php echo isset($_SESSION["errors"]["message"]) ? $_SESSION["errors"]["message"] : "";?></p>
                    <div id="send">
                        <button class="send" type="submit">Envoyer</button>
                    <div>
            </div>
        </form>
    </footer>
</body>
</html>
<?php 
unset($_SESSION["errors"]);
unset($_SESSION["old"]);