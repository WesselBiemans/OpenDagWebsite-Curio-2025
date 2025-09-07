<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curio Opendag</title>

</head>

<body>
    <header>
        <div class="header-container">
            <img src="{{ asset('img/curio-logo.png') }}" alt="Curio Logo">
            <nav>
                <a href="#intro">Introductie</a>
                <a href="#vakken">Vakken</a>
                <a href="#rooster">Lesrooster</a>
                <a href="#trajecten">Trajecten</a>
                <a href="#eigen-mening">Eigen mening</a>
            </nav>
        </div>
    </header>
    <main>
        <p id="intro"></p>
        <div class="intro-container">
            <div class="container">
                <h1>Hello World!</h1>
                <p>Software is tegenwoordig in allerlei apparaten, bijvoorbeeld TV's, telefoons, computers, koelkasten en auto's om er maar een paar te noemen. Het is een onmisbare onderdeel in onze huidige samenleving en helpt miljoenen mensen elke dag, dus is het van belang dat er software developers zijn die dat kan ontwikkelen. Dat kan je bij deze opleiding leren!</p>
                <form action="https://www.curio.nl/mbo/ict/ict/software-developer" target="_blank">
                    <input type="submit" id="sign-up" value="Meld je aan!" />
                </form>
            </div>
            <p id="vakken"></p>
        </div>

        <div class="vakken-container">
            <div class="container">
                <h2>Vakken</h2>
                <div class="vakken">
                    <div class="vak" onclick="toggleDescription('ne')">
                        <h3>Ne</h3>
                        <div class="vak-description" id="ne" hidden>
                            <p>Nederlands is een taalvak die je voor deze opleiding moet behalen. Je krijgt onderwerpen zoals samenhang, inleiding, middel en slot en tekstsoorten.</p>
                        </div>
                    </div>

                    <div class="vak" onclick="toggleDescription('en')">
                        <h3>En</h3>
                        <div class="vak-description" id="en" hidden>
                            <p>Engels is een taalvak die je voor deze opleiding moet behalen. Bij elk hoofdstuk leer je hoe je het onderwerp van gesprekken of verhalen begrijpt in het engels.</p>
                        </div>
                    </div>

                    <div class="vak" onclick="toggleDescription('rek')">
                        <h3>Re</h3>
                        <div class="vak-description" id="rek" hidden>
                            <p>Rekenen is een vak waar je met sommen werkt. Dit vak kan je in het eerste blok al afronden als je een goed resultaat behaalt voor je oefenexamen en daarna ervoor kiest om je eindexamen te maken.</p>
                        </div>
                    </div>

                    <div class="vak" onclick="toggleDescription('web')">
                        <h3>WEB</h3>
                        <div class="vak-description" id="web" hidden>
                            <p>Bij dit vak leer je hoe je met codeer talen zoals HTML, CSS en Javascript een website kan maken, zoals deze! Ook leer je werken met databases en het CRUD-systeem (Create, Read, Update, Delete).</p>
                        </div>
                    </div>

                    <div class="vak" onclick="toggleDescription('native')">
                        <h3>NATIVE</h3>
                        <div class="vak-description" id="native" hidden>
                            <p>Met NATIVE leer je vormen van programmeren die niet worden geleerd bij WEB, zoals het maken van scripts en Applicaties. Voor het eerste blok gebruik je de codeertaal Python, waarna je in volgende blokken overstapt naar C#.</p>
                        </div>
                    </div>

                    <div class="vak" onclick="toggleDescription('pra')">
                        <h3>PRA</h3>
                        <div class="vak-description" id="pra" hidden>
                            <p>PRA staat voor Practijkwerk. Hierbij gaat het over het leren werken in een groep en werken met een opdrachtgever. Ook leer je een manier van werken genaamd AGILE via de SCRUM methode.</p>
                        </div>
                    </div>

                    <div class="vak" onclick="toggleDescription('pro')">
                        <h3>PRO</h3>
                        <div class="vak-description" id="pro" hidden>
                            <p>Bij PRO doe je geen programmeren, maar leer je de stappen voor het maken van een project. Denk aan het plannen en stappenplan, maar ook reflecteren en verbeteren naderhand.</p>
                        </div>
                    </div>

                    <div class="vak" onclick="toggleDescription('mtg')">
                        <h3>Mtg</h3>
                        <div class="vak-description" id="mtg" hidden>
                            <p>Dit is een geplande moment waar de student met de mentor 1 op 1 samen zitten om te bespreken, bijvoorbeeld over prestaties, versnellen of potentiele frustraties.</p>
                        </div>
                    </div>

                    <div class="vak" onclick="toggleDescription('mtu')">
                        <h3>Mtu</h3>
                        <div class="vak-description" id="mtu" hidden>
                            <p>Elke week is er een Mentor uur, waarin de mentor met de klas over bepaalde school-gerelateerde onderwerpen praat, zoals opkomende toetsweken of om algemene vragen beantwoordt.</p>
                        </div>
                    </div>
                </div>
            </div>
            <p id="rooster"></p>
        </div>

        <div class="lesrooster-container">
            <div class="container">
                <div class="lesrooster-text">
                    <h2>Lesrooster (1ste jaar)</h2>
                    <p>Hier is een interactieve rooster van de eerste paar weken van jaar 1. In dikgedrukt staat het vak en lokalen waarin de les wordt gegeven is aangegeven Met RN(lokaal nummer). De meeste schooldagen beginnen om 8:30 en eindigen om 17:00 uur.</p>
                </div>
                <div class="lesrooster-frame">
                    <div class="lesrooster-buttons">
                        <button onclick="previousDay()"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                <path fill="#fff" d="m4 10l9 9l1.4-1.5L7 10l7.4-7.5L13 1z" />
                            </svg></button>
                        <p id="day">Maandag</p>
                        <button onclick="nextDay()"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                <path fill="#fff" d="M7 1L5.6 2.5L13 10l-7.4 7.5L7 19l9-9z" />
                            </svg></button>
                    </div>
                    <div class="lesrooster-images">
                        <img id="0" src="{{ asset('img/0.png') }}" alt="Rooster van 1ste jaar maandag">
                        <img id="1" src="{{ asset('img/1.png') }}" alt="Rooster van 1ste jaar dinsdag" hidden>
                        <img id="2" src="{{ asset('img/2.png') }}" alt="Rooster van 1ste jaar woensdag" hidden>
                        <img id="3" src="{{ asset('img/3.png') }}" alt="Rooster van 1ste jaar donderdag" hidden>
                        <img id="4" src="{{ asset('img/1.png') }}" alt="Rooster van 1ste jaar vrijdag" hidden>
                    </div>
                </div>
            </div>
            <p id="trajecten"></p>
        </div>

        <div class="trajecten-container">
            <div class="container">
                <h2>Trajecten</h2>
                <div class="traject-buttons">
                    <button onclick="showNormal()" id="normal-button">Normaal schooltraject</button>
                    <button onclick="showFast()" id="fast-button">Versneld schooltraject</button>
                </div>
                <div class="normaal-frame">
                    <div class="content">
                        <div class="text">
                            <p>Het normaal school traject is 4 jaar lang, is verdeeld over 7 blokken en bevat twee stages.<br><br>Het eerste jaar gaat vooral over de basis met programmeren, denk aan het maken van websites en het maken van applicaties in C#.<br><br>Jaar 2 ga je voorbereiden op stage lopen met meer theorie.<br><br>Jaar 3 gaat over het verdiepen in een specifieke richting, zoals in websites maken of in applicaties maken. Daarna doe je in het tweedehelft je examens.<br><br>Als laatste jaar is je 2de stage, die duurt het gehele jaar.</p>
                        </div>
                        <img src="{{ asset('img/blokken-normaal.png') }}" alt="Normaal traject">
                    </div>
                </div>
                <div class="versneld-frame" hidden>
                    <div class="content">
                        <div class="text">
                            <p>Na blok A (halverwege jaar 1) kan je pas beslissen om te versnellen. Deze keuze kan alleen gemaakt worden als je blok A op tijd en voldoende hebt afgerond. Je kan natuurlijk ook beslissen om alsnog het normaal 4-jarig traject te volgen.<br><br><br><br>Alle blokken, behalve blok E, worden nogsteeds uitgevoerd, maar wel met een verhoogd tempo. Ook komt het versnelde Blok G, het 2de stage blok, op de plek van Blok E.</p>
                        </div>
                        <img src="{{ asset('img/blokken-versneld.png') }}" alt="Versneld traject">
                    </div>
                </div>
            </div>
            <p id="eigen-mening"></p>
        </div>

        <div class="mening-container">
            <div class="container">
                <h2>Eigen mening</h2>
                <p>Ik zelf vind het een erg fijne opleiding hier. Je hebt genoeg vrijheid om heel veel creativiteit in projecten te stoppen (zie mijn "lingo" project hieronder). Als je hulp nodig hebt zijn alle leraren erg vriendelijk en zorgen ervoor dat je ook gelijk weet hoe je zelf het probleem kan oplossen. Het voelt gek, maar ik heb na de vakantie gewoon zin om weer terug op deze school te zijn!</p>
                <img src="{{ asset('img/lingo-app.png') }}" alt="Lingo app">
            </div>
        </div>
    </main>

    <footer>
        
    </footer>
</body>

<script>
    window.onload = function trajectButtonColor() {
        document.getElementById("fast-button").style.backgroundColor = "#9535F9";
    }

    let currentImage = 0;
    let days = ["Maandag", "Dinsdag", "Woensdag", "Donderdag", "Vrijdag"];

    function toggleDescription(subject) {
        document.getElementById(subject).hidden = !document.getElementById(subject).hidden;
    }

    function previousDay() {
        if (currentImage != 0) {
            document.getElementById(currentImage.toString()).hidden = true;
            currentImage--;
            document.getElementById("day").innerHTML = days[currentImage];
            document.getElementById(currentImage.toString()).hidden = false;
        }
    }

    function nextDay() {
        if (currentImage != 4) {
            document.getElementById(currentImage.toString()).hidden = true;
            currentImage++;
            document.getElementById("day").innerHTML = days[currentImage];
            document.getElementById(currentImage.toString()).hidden = false;
        }
    }

    function showNormal() {
        document.querySelector(".versneld-frame").hidden = true;
        document.querySelector(".normaal-frame").hidden = false;
        document.getElementById("fast-button").style.backgroundColor = "#9535F9";
        document.getElementById("normal-button").style.backgroundColor = "#BEB0FF";
    }

    function showFast() {
        document.querySelector(".normaal-frame").hidden = true;
        document.querySelector(".versneld-frame").hidden = false;
        document.getElementById("normal-button").style.backgroundColor = "#9535F9";
        document.getElementById("fast-button").style.backgroundColor = "#BEB0FF";
    }
</script>

</html>
