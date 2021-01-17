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

/* C:\OpenServer\domains\october/themes/zwiebl-zwiebl_stellar/partials/home_page/section_four.htm */
class __TwigTemplate_84a0ee12570b0dafff00df3eab58c5219f8fa47ec1f2b5fbb69f18abc4e3c0f2 extends \Twig\Template
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
        $filters = array("page" => 30);
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
        echo "<section id=\"four\" class=\"main\">
    <header class=\"major\">
        <h2>Контакты</h2>
        <!-- <p>You can choose stellar (home one-pager) and generic (all other pages) as Layout.</p> -->
        <p>Буду рад быть полезным</p>
    </header>
    <div class=\"content\">
        <form method=\"post\" action=\"\">
            <div class=\"row uniform\">
                <div class=\"6u 12u\$(xsmall)\">
                    <input type=\"text\" placeholder=\"Ваше имя\">
                </div>
                <div class=\"6u\$ 12u\$(xsmall)\">
                    <input type=\"email\" placeholder=\"Ваша почта\">
                </div>
                <div class=\"12u\$\">
                    <textarea name=\"demo-message\" id=\"demo-message\" placeholder=\"Ваше сообщение\" rows=\"6\"></textarea>
                </div>
                <div class=\"12u\$\">
                    <ul class=\"actions\">
                        <li><input type=\"submit\" value=\"Отправить\" class=\"special\" /></li>
                        <li><input type=\"reset\" value=\"Сбросить\" /></li>
                    </ul>
                </div>
            </div>
        </form>
    </div>
    <!-- <footer class=\"major\">
        <ul class=\"actions\">
            <li><a href=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("generic");
        echo "\" class=\"button\">View Generic Page</a></li>
            <li><a href=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("elements");
        echo "\" class=\"button\">View Elements Page</a></li>
            <li><a href=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog");
        echo "\" class=\"button special\">View Blog Page</a></li>
        </ul>
    </footer> -->
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\october/themes/zwiebl-zwiebl_stellar/partials/home_page/section_four.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 32,  97 => 31,  93 => 30,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"four\" class=\"main\">
    <header class=\"major\">
        <h2>Контакты</h2>
        <!-- <p>You can choose stellar (home one-pager) and generic (all other pages) as Layout.</p> -->
        <p>Буду рад быть полезным</p>
    </header>
    <div class=\"content\">
        <form method=\"post\" action=\"\">
            <div class=\"row uniform\">
                <div class=\"6u 12u\$(xsmall)\">
                    <input type=\"text\" placeholder=\"Ваше имя\">
                </div>
                <div class=\"6u\$ 12u\$(xsmall)\">
                    <input type=\"email\" placeholder=\"Ваша почта\">
                </div>
                <div class=\"12u\$\">
                    <textarea name=\"demo-message\" id=\"demo-message\" placeholder=\"Ваше сообщение\" rows=\"6\"></textarea>
                </div>
                <div class=\"12u\$\">
                    <ul class=\"actions\">
                        <li><input type=\"submit\" value=\"Отправить\" class=\"special\" /></li>
                        <li><input type=\"reset\" value=\"Сбросить\" /></li>
                    </ul>
                </div>
            </div>
        </form>
    </div>
    <!-- <footer class=\"major\">
        <ul class=\"actions\">
            <li><a href=\"{{'generic'|page}}\" class=\"button\">View Generic Page</a></li>
            <li><a href=\"{{'elements'|page}}\" class=\"button\">View Elements Page</a></li>
            <li><a href=\"{{'blog'|page}}\" class=\"button special\">View Blog Page</a></li>
        </ul>
    </footer> -->
</section>", "C:\\OpenServer\\domains\\october/themes/zwiebl-zwiebl_stellar/partials/home_page/section_four.htm", "");
    }
}
