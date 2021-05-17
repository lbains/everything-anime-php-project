<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Everything Anime</title>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
    <link rel="stylesheet" type="text/css" href="{{ asset('project.css') }}">
</head>
    <header>
    </header>
    <nav id="nav">
        <a class="nav-link" href="/">Home</a> &nbsp;
        <a class="nav-link" href="{{ route('shounen') }}">Shounen</a> &nbsp;
        <a class="nav-link" href="{{ route('isekai') }}">Isekai</a> &nbsp;
        <a class="nav-link" href="{{ route('horror') }}">Horror</a> &nbsp;
        <a class="nav-link" href="{{ route('psychological') }}">Psychological</a> &nbsp;
        <a class="nav-link" href="{{ route('manga') }}">Manga</a> &nbsp;
        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
    </nav>
    <body>
    <div class="info">
        <h2>Information About The Horror Genre</h2>
        <p>Is there really any need for us to say anything here? It's one of the most popular genres to ever exist in any media! Well, as most of us know, horror is a genre all
            about making us get goosebumps and strike fear into our minds. To be fair, there are different types of horror anime or just movies in general. Some kinds of horror can
            include comedy and instead of being truly scary, it can make fun of things we would traditionally find scary. Sorry to break it to y'all, all the animes here, while including
            some humor between characters, lean towards more traditional horror. Meaning that they'll creep us out, make us feel uncomfortable, and all the fun stuff. Personally, we didn't
            find anime that scary but it still made me feel uncomfortable some scenes, overall it fits in this genre and we know you will enjoy them.</p>
    </div>
    <h2 class="info">Here is information about the popular Horror animes mentioned on the home page!</h2>
    <div class="info">
        <h3>Tokyo Ghoul</h3>
        <img style="float: left; padding-right: 20px;" alt="" src="../images/tokyoghoul.jpg" />
        <p>Kaneki Ken is just a normal student that likes reading books. One day he meets a girl that is reading the same book as him and they start to talk, at the time he didn't know,
            that this would be the greatest mistake of his life. In the world of Tokyo Ghoul, there are two major species, the humans and the ghouls. Both look identical, but the difference
            is that the ghouls feast on the bodies and blood of the humans. The girl that he talked to, turned out to be ghoul and one night, she makes are move and attacks. An accident
            that occurs while the ghoul makes her move on Kaneki leads to him ending up in a hosptial and the ghoul ending up dead. In order to save his life, the doctors put the organs of
            the ghoul in Kaneki and this changes his life forever. He starts to notice that he is turning part ghoul... This begins a long story of Kaneki and his fight between human and
            ghoul. This anime has many, many grusome scenes with humans and ghouls dying, surely to leave some people terrified and other heavily disturbed.</p>
    </div>
    <div class="info">
        <h3>The Promised Neverland</h3>
        <img style="float: left; padding-right: 20px;" alt="" src="../images/promisedneverland.jpg" />
        <p>Emma thinks she is living a normal life in an orphanage with all the other kids she considers family. One day, as one kid is about to leave the orphanage, Emma and her
            friends Norman and Ray find something that belongs to the little girl that is about to leave. Norman and Emma run to try to return the girls toy, but soon they see something
            shocking and an image that will never be erased from their heads. They find the girl dead in a truck and soon find out that the caretaker new about this the entire time. With
            a little digging they find out that there is a race of demons that eat humans and the orphanage is nothing more than a mere farm for the demons and the kids are just livestock.
            Finding out about this cruel reality Norman and Emma tell Ray and together they must come up with a plan to escape with every other kid before they all meet the same cruel faith.
            This anime may not leave people terrified but it will surely send chills up your spine.</p>
    </div>
    <div class="info">
        <h3>The Future Diary</h3>
        <img style="float: left; padding-right: 20px;" alt="" src="../images/futurediary.jpg" />
        <p>Yuki is a just an ordinary and quiet highschool student, he mostly interacts with his phone and keeps a diary about himself on it. The only people he talks to are two
            friends, Deus Ex Machina and Murmur that he believes are imaginary. Later he finds out that Deus and Murmur are real! Deus is the god of time and space while Murmur is his
            servant. His time is running out and he needs to find a new replacement to take the role of the god of space and time. In order to find a successor, he did something similar
            with 12 other people, meaning that 12 others had a diary that told them about the future as well. With these 12 people, he will put them back into the normal world and make
            them hunt each other down and murder each other until one is left. One of these 12 being a girl named Yuno. Yuno has a uncontrolable desire for Yuki and always kept track of
            what he was doing. She'd do anything for Yuki even if that means to kill anyone who dares to hurt him, she's also kill anyone who dares to take him away from him. So it turns
            out that Yuno's diary told her what Yuki is going to do in the future. With this information, Yuno and Yuki come to a conclusion that the diary gives you information about the
            future depending on how you used it. Meaning Yuki's diary tells him everything that will happen to him as he always kept track of himself. </p>
    </div>

    <div class="info">
        <h3 style="text-align: left">Want to find out the Japanese Name for one of these animes? Type it below!</h3>
        <form name="form_name" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            @csrf
            <p>English Name:</p>
            <input type="text" name="name" /> <br />
            <input type="hidden" name="form" value="A"> <br />
            <input id="form" type="submit" name="submit1" value="Gimme the Japanese Name!" />
        </form>

        <h3 style="text-align: left">Want more info about on one of the three animes? Type the name here!</h3>
        <form name="form_info" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            @csrf
            <p>Anime Name:</p>
            <input type="text" name="aName" /> <br />
            <input type="hidden" name="form" value="B"> <br />
            <input type="submit" name="submit2" value="I want more info!" />
        </form>
        <?php
        if(($_SERVER['REQUEST_METHOD'] == 'POST')) {
            switch ($_POST['form']){
                case "A":
                    $name = $_POST['name'];
                    if (strcasecmp($name, "Tokyo Ghoul") == 0){
                        print("Tokyo Ghoul has the same name in Japan!");
                    }
                    elseif (strcasecmp($name, "The Promised Neverland") == 0){
                        print("The japanese name of " . $name . " is: Yakusoku no Neverland");
                    }
                    elseif (strcasecmp($name, "The Future Diary") == 0){
                        print("The japanese name of " . $name . " is: Mirai Nikki");
                    }
                    else {
                        print("Hey! That anime was not mentioned above D:");
                    }
                    break;
                case "B":
                    $aname = $_POST['aName'];
                    if (strcasecmp($aname, "Tokyo Ghoul") == 0){
                        print("Get more info on " . $aname . " here: "  . "<a href='https://myanimelist.net/anime/22319/Tokyo_Ghoul?q=tokyo&cat=anime'>$aname information</a>");
                    }
                    elseif (strcasecmp($aname, "The Promised Neverland") == 0){
                        print("Get more info on " . $aname . " here: "  . "<a href='https://myanimelist.net/anime/37779/Yakusoku_no_Neverland?q=the%20promised%20neverland&cat=anime'>$aname information</a>");
                    }
                    elseif (strcasecmp($aname, "The Future Diary") == 0){
                        print("Get more info on " . $aname . " here: " . "<a href='https://myanimelist.net/anime/10620/Mirai_Nikki_TV?q=the%20future&cat=anime'>$aname information</a>");
                    }
                    else {
                        print("Hey! That anime was not mentioned above D:");
                    }
                    break;
                default:
                    echo "huh";
            }
        }
        ?>
    </div>
    </body>
    <footer>
        This is a college assignment, NONE of the images belong to me, just found them on google lmao, plz no copyright
    </footer>
</html>
