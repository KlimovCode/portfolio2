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

/* C:\OpenServer\domains\october/themes/zwiebl-zwiebl_stellar/partials/home_page/section_one.htm */
class __TwigTemplate_0efe9ed2b153094be9475f2e77155d128d126c71f7e35b276fdf9454232b0254 extends \Twig\Template
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
        $filters = array("page" => 11, "theme" => 14);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['page', 'theme'],
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
        echo "<section id=\"one\" class=\"main\">
    <div class=\"spotlight\">
        <div class=\"content\">
            <header class=\"major\">
                <h2>Обо мне</h2>
            </header>
            <p>Приветствую!
                Меня зовут Сергей Климов, я веб-программист. <br />
                Буду рад спроектировать и реализовать для вас лендинг, блог, магазин.</p>
            <!-- <ul class=\"actions\">
                <li><a href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("generic");
        echo "\" class=\"button\">Подробнее</a></li>
            </ul> -->
        </div>
        <span class=\"image\"><img src=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/pic01.jpg");
        echo "\" alt=\"image\" /></span>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\october/themes/zwiebl-zwiebl_stellar/partials/home_page/section_one.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 14,  74 => 11,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"one\" class=\"main\">
    <div class=\"spotlight\">
        <div class=\"content\">
            <header class=\"major\">
                <h2>Обо мне</h2>
            </header>
            <p>Приветствую!
                Меня зовут Сергей Климов, я веб-программист. <br />
                Буду рад спроектировать и реализовать для вас лендинг, блог, магазин.</p>
            <!-- <ul class=\"actions\">
                <li><a href=\"{{'generic'|page}}\" class=\"button\">Подробнее</a></li>
            </ul> -->
        </div>
        <span class=\"image\"><img src=\"{{'assets/images/pic01.jpg'|theme}}\" alt=\"image\" /></span>
    </div>
</section>", "C:\\OpenServer\\domains\\october/themes/zwiebl-zwiebl_stellar/partials/home_page/section_one.htm", "");
    }
}
