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

/* C:\OpenServer\domains\october/themes/zwiebl-zwiebl_stellar/partials/home_page/section_two.htm */
class __TwigTemplate_3723fb786a80d521080721597cee997e2d26dd8ac52e136eadfa4f8cf76c101a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array();
        $filters = array("page" => 25);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['page'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<section id=\"two\" class=\"main\">
    <header class=\"major\">
        <h2>Проекты</h2>
    </header>
    <ul class=\"features\">
        <li>
            <span class=\"icon major style1 fa-code\"></span>
            <h3>Лендинг по дезинсекции</h3>
            <p>Адаптивный дизайн на чистых технологиях HTML, CSS, JS</p>
            <a href=\"http://vrediteleynet.site/\">vrediteleynet.site</a>
        </li>
        <!-- <li>
            <span class=\"icon major style3 fa-copy\"></span>
            <h3>Amed sed feugiat</h3>
            <p>Sed lorem amet ipsum dolor et amet nullam consequat a feugiat consequat tempus veroeros sed consequat.</p>
        </li>
        <li>
            <span class=\"icon major style5 fa-diamond\"></span>
            <h3>Dolor nullam</h3>
            <p>Sed lorem amet ipsum dolor et amet nullam consequat a feugiat consequat tempus veroeros sed consequat.</p>
        </li> -->
    </ul>
    <!-- <footer class=\"major\">
        <ul class=\"actions\">
            <li><a href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("generic");
        echo "\" class=\"button\">Подробнее</a></li>
        </ul>
    </footer> -->
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\october/themes/zwiebl-zwiebl_stellar/partials/home_page/section_two.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 25,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"two\" class=\"main\">
    <header class=\"major\">
        <h2>Проекты</h2>
    </header>
    <ul class=\"features\">
        <li>
            <span class=\"icon major style1 fa-code\"></span>
            <h3>Лендинг по дезинсекции</h3>
            <p>Адаптивный дизайн на чистых технологиях HTML, CSS, JS</p>
            <a href=\"http://vrediteleynet.site/\">vrediteleynet.site</a>
        </li>
        <!-- <li>
            <span class=\"icon major style3 fa-copy\"></span>
            <h3>Amed sed feugiat</h3>
            <p>Sed lorem amet ipsum dolor et amet nullam consequat a feugiat consequat tempus veroeros sed consequat.</p>
        </li>
        <li>
            <span class=\"icon major style5 fa-diamond\"></span>
            <h3>Dolor nullam</h3>
            <p>Sed lorem amet ipsum dolor et amet nullam consequat a feugiat consequat tempus veroeros sed consequat.</p>
        </li> -->
    </ul>
    <!-- <footer class=\"major\">
        <ul class=\"actions\">
            <li><a href=\"{{'generic'|page}}\" class=\"button\">Подробнее</a></li>
        </ul>
    </footer> -->
</section>", "C:\\OpenServer\\domains\\october/themes/zwiebl-zwiebl_stellar/partials/home_page/section_two.htm", "");
    }
}
