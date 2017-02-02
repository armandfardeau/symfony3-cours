<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_5aaced7f15a60ac14ead3c08a764998a4c6e40cb64a682ac4203727a07d7f62e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df168e2a08b0da7f7e7cd08db493b46bea8c4c63c32ea6f7e63350ad6da45c7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df168e2a08b0da7f7e7cd08db493b46bea8c4c63c32ea6f7e63350ad6da45c7e->enter($__internal_df168e2a08b0da7f7e7cd08db493b46bea8c4c63c32ea6f7e63350ad6da45c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_dfdd896dd10bf892efa7a26fa89551b4311dbebe0c614021f1b4aeb75d254b75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfdd896dd10bf892efa7a26fa89551b4311dbebe0c614021f1b4aeb75d254b75->enter($__internal_dfdd896dd10bf892efa7a26fa89551b4311dbebe0c614021f1b4aeb75d254b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_df168e2a08b0da7f7e7cd08db493b46bea8c4c63c32ea6f7e63350ad6da45c7e->leave($__internal_df168e2a08b0da7f7e7cd08db493b46bea8c4c63c32ea6f7e63350ad6da45c7e_prof);

        
        $__internal_dfdd896dd10bf892efa7a26fa89551b4311dbebe0c614021f1b4aeb75d254b75->leave($__internal_dfdd896dd10bf892efa7a26fa89551b4311dbebe0c614021f1b4aeb75d254b75_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
