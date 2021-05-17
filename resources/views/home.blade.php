<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Everything Anime</title>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
    <link rel="stylesheet" type="text/css" href="{{ asset('project.css') }}">
</head>
<div id="wrapper">
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
    <div id="shounendiv">
        <h2>Shounen Anime</h2>
        <p>Here are some popular Shounen Anime! More information in the Shounen Tab!</p>
        <a href="https://myanimelist.net/anime/20/Naruto?q=naruto">
            <img src="../images/naruto.jpg" alt="Naruto" width="158px" height="200px">
        </a>
        &nbsp;
        <a href="https://myanimelist.net/anime/34572/Black_Clover?q=black%20clover">
            <img src="../images/blackclover.jpg" alt="Black Clover" width="158px" height="200px">
        </a>
        &nbsp;
        <a href="https://myanimelist.net/anime/38000/Kimetsu_no_Yaiba?q=demon%20slayer">
            <img src="../images/demonslayer.jpg" alt="Demon Slayer" width="158px" height="200px">
        </a>
    </div>
    <div id="isekaidiv">
        <h2>Isekai Anime</h2>
        <p>Here are some popular Isekai Anime! More information in the Isekai Tab!</p>
        <a href="https://myanimelist.net/anime/32615/Youjo_Senki?q=you">
            <img src="../images/tanyaevil.jpg" alt="Saga of Tanya the Evil" width="158px" height="200px">
        </a>
        &nbsp;
        <a href="https://myanimelist.net/anime/35790/Tate_no_Yuusha_no_Nariagari?q=the%20rising%20of%20the%20">
            <img src="../images/shieldhero.jpg" alt="Rising of the Shield Hero" width="158px" height="200px">
        </a>
        &nbsp;
        <a href="https://myanimelist.net/anime/31240/Re_Zero_kara_Hajimeru_Isekai_Seikatsu">
            <img src="../images/rezero.jpg" alt="Re:Zero" width="158px" height="200px">
        </a>
    </div>
    <div id="horrordiv">
        <h2>Horror Anime</h2>
        <p>Here are some popular Horror Anime! More information in the Horror Tab!</p>
        <a href="https://myanimelist.net/anime/22319/Tokyo_Ghoul?q=tokyo">
            <img src="../images/tokyoghoul.jpg" alt="Tokyo Ghoul" width="158px" height="200px">
        </a>
        &nbsp;
        <a href="https://myanimelist.net/anime/37779/Yakusoku_no_Neverland?q=the%20promise">
            <img src="../images/promisedneverland.jpg" alt="The Promised Neverland" width="158px" height="200px">
        </a>
        &nbsp;
        <a href="https://myanimelist.net/anime/10620/Mirai_Nikki?q=future">
            <img src="../images/futurediary.jpg" alt="The Future Diary" width="158px" height="200px">
        </a>
    </div>
    <div id="psychdiv">
        <h2>Psychological Anime</h2>
        <p>Here are some popular Shounen Anime! More information in the Psychological Tab!</p>
        <a href="https://myanimelist.net/anime/1535/Death_Note?q=deat">
            <img src="../images/deathnote.jpg" alt="Death Note" width="158px" height="200px">
        </a>
        &nbsp;
        <a href="https://myanimelist.net/anime/1575/Code_Geass__Hangyaku_no_Lelouch?q=code">
            <img src="../images/codegeass.jpg" alt="Code Geass" width="158px" height="200px">
        </a>
        &nbsp;
        <a href="https://myanimelist.net/anime/37999/Kaguya-sama_wa_Kokurasetai__Tensai-tachi_no_Renai_Zunousen?q=love%20is%20war">
            <img src="../images/loveiswar.jpg" alt="Love is War" width="158px" height="200px">
        </a>
    </div>
    <div id="mangadiv">
        <h2>Manga</h2>
        <p>Some of your favorite Animes have Mangas! Here are some popular ones! More infromation in the Manga Tab!</p>
        <a href="https://myanimelist.net/manga/4632/Oyasumi_Punpun?q=goodni">
            <img src="../images/goodnightpunpun.jpg" alt="Goodnight Punpun" width="150px" height="200px">
        </a>
        &nbsp;
        <a href="https://myanimelist.net/manga/43661/Owari_no_Seraph?q=serap">
            <img src="../images/seraphoftheend.jpg" alt="Seraph of the End" width="150px" height="200px">
        </a>
        &nbsp;
        <a href="https://myanimelist.net/manga/99007/Komi-san_wa_Comyushou_desu?q=komi">
            <img src="../images/komicantcommunicate.jpg" alt="Komi can't Communicate" width="150px" height="200px">
        </a>
    </div>
    </body>
    <footer>
        This is a college assignment, NONE of the images belong to me, just found them on google lmao, plz no copyright
    </footer>
</div>
</html>
