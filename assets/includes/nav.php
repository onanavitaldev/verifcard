<div class="nav">
    <input type="checkbox" id="nav-check">
    <div class="nav-header">
        <div class="nav-title">
            <a href="index.php" title="VerifCard">
                <i>Verif</i>
                <b style="color:var(--color)">Card</b>
            </a>
        </div>
    </div>
    <div class="nav-btn">
        <label for="nav-check">
            <span></span>
            <span></span>
            <span></span>
        </label>
    </div>

    <div class="nav-links">
        <a href="index.php">Accueil</a>
        <a href="#services">Services</a>
        <a href="verif.php">Vérifier mon coupon</a>
        <a href="mailto:verifcard@gmail.com">Contact</a>
        <a href="#" id="loupe" onclick="showSearch();">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#000">
                <path d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z"></path>
                <path d="M11.412 8.586c.379.38.588.882.588 1.414h2a3.977 3.977 0 0 0-1.174-2.828c-1.514-1.512-4.139-1.512-5.652 0l1.412 1.416c.76-.758 2.07-.756 2.826-.002z"></path>
            </svg>
        </a>
    </div>
</div>
<div class="search" style="display: none;">
    <span onclick="hideSearch();">X</span>
    <form class="flex align-middle" name="search" action="search.php" method="post">
        <div class="flex flex-wrap">
            <input type="text" name="searchtitle" class="form-control" placeholder="Trouver un article..." required>
        </div>
    </form>
</div>
<style>
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0px;
    }

    .search {
        background-color: var(--yellow);
        border: none;
        border-radius: 4px;
        padding: 2em;
        width: 470px;
        margin-top: 8em;
        z-index: 1000;
        position: fixed;
        right: 30px;
        animation: fadeInRight 1.3s;
        display: none;
    }

    .search span {
        font-weight: bold;
        float: right;
        margin-top: -1.4em;
        margin-right: -1em;
        font-family: cursive;
        cursor: pointer;
    }

    .search form input {
        caret-color: var(--yellow);
        padding: 1em 0.8em;
        width: 400px;
        border: none;
        outline: none;
        border-radius: 4px;
        font-family: Montserrat;
        font-size: 19px;
    }

    .nav {
        background-color: #fff;
        border-bottom: 0.8px solid #f1f1f1;
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        height: 100px;
        z-index: 1000;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .nav>.nav-header {
        display: inline;
        margin-top: -2em;
    }

    .nav>.nav-header>.nav-title a {
        display: inline-block;
        font-size: 30px;
        color: #fff;
        padding: 40px 10px 10px 10px;
        color: #000;
        margin-left: 1em;
        text-decoration-line: none;
    }

    .nav>.nav-btn {
        display: none;
    }

    .nav>.nav-links {
        display: flex;
        align-items: center;
        float: right;
        font-size: 18px;
        margin-right: 1em;
    }

    .nav>.nav-links>a {
        display: inline-block;
        padding: 13px 10px 13px 10px;
        text-decoration: none;
        color: #000;
        transition: var(--transition);
    }

    .nav>.nav-links>a:hover {
        color: var(--color);
    }

    .nav>#nav-check {
        display: none;
    }

    @media (max-width:600px) {
        .nav>.nav-btn {
            display: inline-block;
            position: absolute;
            right: 15px;
            top: 30px;
        }

        .nav>.nav-btn>label {
            display: inline-block;
            width: 50px;
            height: 50px;
            padding: 13px;
        }

        .nav>.nav-btn>label:hover,
        .nav #nav-check:checked~.nav-btn>label {
            background-color: rgba(0, 0, 0, 0.3);
        }

        .nav>.nav-btn>label>span {
            display: block;
            width: 25px;
            height: 10px;
            border-top: 2px solid #eee;
        }

        .nav>.nav-links {
            position: absolute;
            display: block;
            width: 100%;
            background-color: #333;
            height: 0px;
            transition: all 0.3s ease-in;
            overflow-y: hidden;
            top: 10px;
            left: 0px;
        }

        .nav>.nav-links>a {
            display: block;
            width: 100%;
        }

        .nav>#nav-check:not(:checked)~.nav-links {
            height: 0px;
        }

        .nav>#nav-check:checked~.nav-links {
            height: calc(100vh - 50px);
            overflow-y: auto;
        }
    }
</style>
<script>
    function showSearch() {
        var box = document.querySelector(".search").style.display = "block";
    }
    showSearch();

    function hideSearch() {
        var box = document.querySelector(".search").style.display = "none";
    }
    hideSearch();
</script>