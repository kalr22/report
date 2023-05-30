<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* report.html.twig */
class __TwigTemplate_650b070136375238094c0adee138600b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "report.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "report.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "report.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Report page!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Redovisning av kursmoment i kursen MVC</h1>
    <section class=\"section\">
        <h2 id=\"kmom01\">
            <a href=\"#kmom01\">Kmom01</a>
        </h2>
        <p>För ett par år sedan gick jag en kurs i C# där vi introducerades till objektorienterad programmering. Det var då väldigt krångligt och rörigt och jag greppade det inte helt. Nu, efter att ha tittat på introduktionsvideon med Mikael, kommer jag ihåg en del och jag hoppas på att saker och ting faller mer på plats efter denna kurs.</p>
        <p>De grunder man behöver veta och förstå i PHPs modell för klasser och objekt är:</p>
        <ol>
            <li>För att skapa en klass skriver man “class” följt av klassens namn med den första bokstaven i versal samt “curly brackets”.</li>
            <li>Innanför klassen kan variabler och metoder deklareras. Variablerna och metoderna kan antingen vara satt i private, protected eller public. Private innebär att variabeln eller metoden endast är nåbar innanför klassen. Protected innebär att variabeln eller metoden är nåbar innanför klassen men också innanför subklasser. När variabeln eller metoden är satt som public är de nåbara även utanför klassen.</li>
            <li>En subclass ör en klass som “extends” en annan klass, för att skapa en subklass använder man nyckelordet “extends”. En subklass är bra att ha när man till exempel vill återanvända kod som finns i en annan klass.</li>
            <li>För att kunna använda sin klass skapar man ett objekt av den, det gör man genom nyckelordet “new” följt av klassens namn.</li>
        </ol>
        <p>Kodbasen, koden och strukturen tycker jag är relativt lik det vi jobbade med i ramverket Pico. Kodbasen i Symfony består av ett antal komponenter som är separata från varandra men som samarbetar för att allt ska fungera. Strukturen följer MVC modellen (Model-View-Controller).</p>
        <p>Det finns många delar ur artikeln “PHP The Right Way” som jag anser intressanta och värdefulla. Förutom de grundläggande koncepten som tas upp i PHP tycker jag att delarna kring prestandatips och säkerhetsåtgärder är värdefulla och även delar jag gärna vill lära mig mer om.</p>
        <p>Mitt TIL för detta kursmoment har varit allt, allt känns ganska mycket just nu men hoppas på att saker och ting kommer falla på plats ju längre in i kursen jag kommer. </p>
    </section>
    <section class=\"section\">
        <h2 id=\"kmom02\">
            <a href=\"#kmom02\">Kmom02</a>
        </h2>
        <ul>
            <li>Arv tillåter en klass att ärva egenskaper från en annan klass. Den klassen som ärver kallas subklass eller barnklass, den ärver förälder-klassens egenskaper och metoder och kan även utöka eller modifiera dem efter behov.</li>
            <li>En klass som innehåller en eller flera instanser av andra klasser kallas komposition. Genom att använda komposition kan man enkelt kombinera funktionaliteter hos olika klasser, vilket ger mer flexibilitet.</li>
            <li>I en Interface beskriver man vilka metoder som måste finnas med i en klass, den beskriver bara och ger ingen implementation av dessa metoder. Detta kan vara nödvändigt att använda när man i flera klasser vill dela gemensam funktionalitet.</li>
            <li>Trait är ett sätt att återanvända kod i PHP. En Trait är en samling metoder som kan användas av flera olika klasser, man inkluderar då traits i klassen genom att skriva “use” framför.</li>
        </ul>
        <p>Jag är helt okej nöjd med min lösning, har använt mig av två klasser, varav i den ena har jag använt mig av komposition i en av metoderna för att skapa varje kort. Det finns förbättringspotential i min klass Deck som innehåller alla metoder för att skapa och modifiera kortleken. Här hade man kunnat snygga upp det genom att ha fler klasser som ärver från varandra.</p>
        <p>Mina reflektioner så här långt med att jobba i Symfony är att det är ganska rörigt, svårt att håla reda på alla mappar och filer. Det är speciellt svårt om man har missat att inkludera en fil i den fil man jobbar med, ibland har det tagit en stund för mig att förstå vad det är som är fel. Att jobba med klasser är helt nytt för mig och jag känner mig fortfarande lite ringrostig.</p>
    </section>
    <section class=\"section\">
        <h2 id=\"kmom03\">
            <a href=\"#kmom03\">Kmom03</a>
        </h2>
        <p>Här är redovisningstexten.</p>
    </section>
    <section class=\"section\">
        <h2 id=\"kmom04\">
            <a href=\"#kmom04\">Kmom04</a>
        </h2>
        <p>Här är redovisningstexten.</p>
    </section>
    <section class=\"section\">
        <h2 id=\"kmom05\">
            <a href=\"#kmom05\">Kmom05</a>
        </h2>
        <p>Här är redovisningstexten.</p>
    </section>
    <section class=\"section\">
        <h2 id=\"kmom06\">
            <a href=\"#kmom06\">Kmom06</a>
        </h2>
        <p>Här är redovisningstexten.</p>
    </section>
    <section class=\"section\">
        <h2 id=\"kmom07/10\">
            <a href=\"#kmom07/10\">Kmom07/10</a>
        </h2>
        <p>Här är redovisningstexten.</p>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "report.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Report page!{% endblock %}

{% block body %}
    <h1>Redovisning av kursmoment i kursen MVC</h1>
    <section class=\"section\">
        <h2 id=\"kmom01\">
            <a href=\"#kmom01\">Kmom01</a>
        </h2>
        <p>För ett par år sedan gick jag en kurs i C# där vi introducerades till objektorienterad programmering. Det var då väldigt krångligt och rörigt och jag greppade det inte helt. Nu, efter att ha tittat på introduktionsvideon med Mikael, kommer jag ihåg en del och jag hoppas på att saker och ting faller mer på plats efter denna kurs.</p>
        <p>De grunder man behöver veta och förstå i PHPs modell för klasser och objekt är:</p>
        <ol>
            <li>För att skapa en klass skriver man “class” följt av klassens namn med den första bokstaven i versal samt “curly brackets”.</li>
            <li>Innanför klassen kan variabler och metoder deklareras. Variablerna och metoderna kan antingen vara satt i private, protected eller public. Private innebär att variabeln eller metoden endast är nåbar innanför klassen. Protected innebär att variabeln eller metoden är nåbar innanför klassen men också innanför subklasser. När variabeln eller metoden är satt som public är de nåbara även utanför klassen.</li>
            <li>En subclass ör en klass som “extends” en annan klass, för att skapa en subklass använder man nyckelordet “extends”. En subklass är bra att ha när man till exempel vill återanvända kod som finns i en annan klass.</li>
            <li>För att kunna använda sin klass skapar man ett objekt av den, det gör man genom nyckelordet “new” följt av klassens namn.</li>
        </ol>
        <p>Kodbasen, koden och strukturen tycker jag är relativt lik det vi jobbade med i ramverket Pico. Kodbasen i Symfony består av ett antal komponenter som är separata från varandra men som samarbetar för att allt ska fungera. Strukturen följer MVC modellen (Model-View-Controller).</p>
        <p>Det finns många delar ur artikeln “PHP The Right Way” som jag anser intressanta och värdefulla. Förutom de grundläggande koncepten som tas upp i PHP tycker jag att delarna kring prestandatips och säkerhetsåtgärder är värdefulla och även delar jag gärna vill lära mig mer om.</p>
        <p>Mitt TIL för detta kursmoment har varit allt, allt känns ganska mycket just nu men hoppas på att saker och ting kommer falla på plats ju längre in i kursen jag kommer. </p>
    </section>
    <section class=\"section\">
        <h2 id=\"kmom02\">
            <a href=\"#kmom02\">Kmom02</a>
        </h2>
        <ul>
            <li>Arv tillåter en klass att ärva egenskaper från en annan klass. Den klassen som ärver kallas subklass eller barnklass, den ärver förälder-klassens egenskaper och metoder och kan även utöka eller modifiera dem efter behov.</li>
            <li>En klass som innehåller en eller flera instanser av andra klasser kallas komposition. Genom att använda komposition kan man enkelt kombinera funktionaliteter hos olika klasser, vilket ger mer flexibilitet.</li>
            <li>I en Interface beskriver man vilka metoder som måste finnas med i en klass, den beskriver bara och ger ingen implementation av dessa metoder. Detta kan vara nödvändigt att använda när man i flera klasser vill dela gemensam funktionalitet.</li>
            <li>Trait är ett sätt att återanvända kod i PHP. En Trait är en samling metoder som kan användas av flera olika klasser, man inkluderar då traits i klassen genom att skriva “use” framför.</li>
        </ul>
        <p>Jag är helt okej nöjd med min lösning, har använt mig av två klasser, varav i den ena har jag använt mig av komposition i en av metoderna för att skapa varje kort. Det finns förbättringspotential i min klass Deck som innehåller alla metoder för att skapa och modifiera kortleken. Här hade man kunnat snygga upp det genom att ha fler klasser som ärver från varandra.</p>
        <p>Mina reflektioner så här långt med att jobba i Symfony är att det är ganska rörigt, svårt att håla reda på alla mappar och filer. Det är speciellt svårt om man har missat att inkludera en fil i den fil man jobbar med, ibland har det tagit en stund för mig att förstå vad det är som är fel. Att jobba med klasser är helt nytt för mig och jag känner mig fortfarande lite ringrostig.</p>
    </section>
    <section class=\"section\">
        <h2 id=\"kmom03\">
            <a href=\"#kmom03\">Kmom03</a>
        </h2>
        <p>Här är redovisningstexten.</p>
    </section>
    <section class=\"section\">
        <h2 id=\"kmom04\">
            <a href=\"#kmom04\">Kmom04</a>
        </h2>
        <p>Här är redovisningstexten.</p>
    </section>
    <section class=\"section\">
        <h2 id=\"kmom05\">
            <a href=\"#kmom05\">Kmom05</a>
        </h2>
        <p>Här är redovisningstexten.</p>
    </section>
    <section class=\"section\">
        <h2 id=\"kmom06\">
            <a href=\"#kmom06\">Kmom06</a>
        </h2>
        <p>Här är redovisningstexten.</p>
    </section>
    <section class=\"section\">
        <h2 id=\"kmom07/10\">
            <a href=\"#kmom07/10\">Kmom07/10</a>
        </h2>
        <p>Här är redovisningstexten.</p>
    </section>
{% endblock %}", "report.html.twig", "/Users/karro/dbwebb-kurser/webtec/mvc/me/report/templates/report.html.twig");
    }
}
