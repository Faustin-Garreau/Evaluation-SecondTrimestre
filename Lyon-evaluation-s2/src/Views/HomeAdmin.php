<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <script src="https://kit.fontawesome.com/c1d0ab37d6.js" crossorigin="anonymous"></script>
    <title>Home</title>
</head>
<body>
    <header>
        <nav>
                <p><bold>𝙿𝚘𝚛𝚝𝚏𝚘𝚕𝚒𝚘</bold></p>
            <ul>
                    <li><a href="#comp">𝙲𝚘𝚖𝚙𝚎𝚝𝚎𝚗𝚌𝚎𝚜</a></li>
                    <li><a href="#proj">𝙿𝚛𝚘𝚓𝚎𝚝𝚜</a></li>
                    <li><a href="#contact">𝙲𝚘𝚗𝚝𝚊𝚌𝚝</a></li>
            </ul>
        </nav>

        <h1>𝙱𝚒𝚎𝚗𝚟𝚎𝚗𝚞𝚎 𝚜𝚞𝚛 𝚖𝚘𝚗 𝚙𝚘𝚛𝚝𝚘𝚏𝚕𝚒𝚘</h1>
            <p class="moi">𝙼𝚘𝚒 𝚌'𝚎𝚜𝚝 𝚏𝚊𝚞𝚜𝚝𝚒𝚗 !</p>
            <form class="update_image" action="/admin/home/<?php echo $images->getId();?>/image" method="POST">
                <input class="input_image" name="image" type="text" placeholder="lien de l'image">
                    <button class="button_image" type="submit">
                        <i id="tcheck" class="fas fa-check-circle"></i>
                    </button>
            </form>
            <div id="savoir">
                <a href="#moi">
                    <button class="button_me">𝙴𝚗 𝚜𝚊𝚟𝚘𝚒𝚛 𝚙𝚕𝚞𝚜</button>
                </a>
            </div>
    </header>
        <hr>
    <main id="moi">
        <h2>𝙐𝙣 𝙥𝙚𝙪 𝙥𝙡𝙪𝙨 𝙨𝙪𝙧 𝙢𝙤𝙞</h2>
                <form class="text" action="/admin/text/edit" method="POST">
                    <textarea name="propos" id="propos" cols="40" rows="5"><?php echo $propos->getPropos();?></textarea>
                    <button class="edit" type="submit">
                    <i id="tcheck" class="fas fa-check-circle"></i>
                    </button>
                </form>
    </main>
        <p class="errors"><?php echo isset($_SESSION["errors"]["propos"]) ? $_SESSION["errors"]["propos"] : "";?></p>
        <hr>
    <section>
        <h2 id="comp">𝙈𝙚𝙨 𝙘𝙤𝙢𝙥é𝙩𝙚𝙣𝙘𝙚𝙨</h2>
        <form class="form_comp" action="/admin/competences/create" method="POST">
            <input class="comp_input" type="text" name="titre" placeholder="titre de la compétence">
                <button class="create_comp" type="submit">
                    <i id="tcheck_comp" class="fas fa-check-circle"></i>
                </button>
        </form>
                <p class="errors"><?php echo isset($_SESSION["errors"]["titre"]) ? $_SESSION["errors"]["titre"] : "";?></p>
            <div class="compétences">
            <?php  foreach ($competences as $competence) { ?>
                <form id="comp_" action="/admin/<?php echo $competence->getId();?>/edit" method="POST">
                    <input id="compétence_affiche" type="text" name="competences" value="<?php echo $competence->getCompetences(); ?>">
                        <div id="button">
                    <button class="edit_comp" type="submit">
                        <i class="fas fa-pen"></i>
                    </button>
                </form>

                <form class="comp" action="/admin/<?php echo $competence->getId();?>/delete" method="POST">
                    <button class="delete" type="submit">
                        <i class="fas fa-trash"></i>
                    </button>
                        </div>
                </form>
            <?php } ?>
            </div>
                <p class="errors"><?php echo isset($_SESSION["errors"]["competences"]) ? $_SESSION["errors"]["competences"] : "";?></p>
    </section>
    <hr>
    <section>
        <h2 id="proj">𝘔𝘦𝘴 𝘱𝘳𝘰𝘫𝘦𝘵𝘴</h2>
        <form class="form_proj" action="/admin/projets/create" method="POST">
            <div>
                <input class="titre" type="text" name="titre" placeholder="titre du projet" >
                <input class="link" type="text" name="link" placeholder="lien du projet">
            </div>
                <button class="create" type="submit">
                    <i id="circle" class="fas fa-check-circle"></i>
                </button>
        </form>
        <p class="errors"><?php echo isset($_SESSION["errors"]["titre"]) ? $_SESSION["errors"]["titre"] : "";?></p>
        <p class="errors"><?php echo isset($_SESSION["errors"]["link"]) ? $_SESSION["errors"]["link"] : "";?></p>
        <div id="projets">
        <?php  foreach ($projets as $projet) { ?>
            <div id="style">
                <form class="projet" action="/admin/projets/<?php echo $projet->getId();?>/edit" method="POST">
                    <input class="proj_titre" type="text" name="projets" value="<?php echo $projet->getTitre(); ?>">
                    <input class="proj_link" type="text" name="links" value="<?php echo $projet->getLink(); ?>">
                        <div id="button">
                    <button class="edit_proj" type="submit">
                        <i class="fas fa-pen"></i>
                    </button>
                </form>
                <form action="/admin/projets/<?php echo $projet->getId();?>/delete" method="POST">
                    <button class="delete_proj" type="submit">
                        <i class="fas fa-trash"></i>
                    </button>
                </form>
                        </div>
            </div>
            <?php } ?>
            </div>
    </section>
        <p class="errors"><?php echo isset($_SESSION["errors"]["projets"]) ? $_SESSION["errors"]["projets"] : "";?></p>
        <p class="errors"><?php echo isset($_SESSION["errors"]["links"]) ? $_SESSION["errors"]["links"] : "";?></p>

        <hr>
    <footer>
        <h2 class="contact">Contact</h2>
            <div class="contacts">
        <?php  foreach ($contacts as $contact) { ?>
            <div class="email_modal">
            <p id="email"><?php echo $contact->getEmail(); ?></p>
                <i onclick=" hide('modal-<?php echo $contact->getId(); ?>') " id="eyes" class="fas fa-eye"></i>
                <form action="/admin/contact/<?php echo $contact->getId();?>/delete" method="POST"><button id="delete_contact" type="submit"><i class="fas fa-trash"></i></button></form>
                    <div class="modal hide" id="modal-<?php echo $contact->getId(); ?>">
                        <div class="modal-content">
                            <span onclick=" hide('modal-<?php echo $contact->getId(); ?>') " class="close">&times;</span>
                                <div class="modal-body">
                                    <p id="message"><?php echo $contact->getMessage(); ?></p>
                                </div>
                        </div>
                    </div>
            </div>
        <?php } ?>
        </div>
    </footer>
</body>
    <script>
        function hide(id) {
            let modal = document.getElementById(id);
            modal.classList.toggle("hide");
        }
</script>
</html>
<?php 
unset($_SESSION["errors"]);
unset($_SESSION["old"]);