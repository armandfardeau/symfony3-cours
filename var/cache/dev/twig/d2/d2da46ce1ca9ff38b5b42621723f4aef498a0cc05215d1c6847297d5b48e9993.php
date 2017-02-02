<?php

/* :CreatureFantastique:new.html.twig */
class __TwigTemplate_8548d6bee1ad402e62116750e22fc30e3f4e42050bf941a10891962c1da843ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":CreatureFantastique:new.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5dd07a4a286402ab07e4320600e5d51ea4abd723923a3ac41e20d14fdb70b70a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dd07a4a286402ab07e4320600e5d51ea4abd723923a3ac41e20d14fdb70b70a->enter($__internal_5dd07a4a286402ab07e4320600e5d51ea4abd723923a3ac41e20d14fdb70b70a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":CreatureFantastique:new.html.twig"));

        $__internal_562a12d46deff18ceaa597f57f4a174cdb7a10039e1b28a35502542cd1669ce1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_562a12d46deff18ceaa597f57f4a174cdb7a10039e1b28a35502542cd1669ce1->enter($__internal_562a12d46deff18ceaa597f57f4a174cdb7a10039e1b28a35502542cd1669ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":CreatureFantastique:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5dd07a4a286402ab07e4320600e5d51ea4abd723923a3ac41e20d14fdb70b70a->leave($__internal_5dd07a4a286402ab07e4320600e5d51ea4abd723923a3ac41e20d14fdb70b70a_prof);

        
        $__internal_562a12d46deff18ceaa597f57f4a174cdb7a10039e1b28a35502542cd1669ce1->leave($__internal_562a12d46deff18ceaa597f57f4a174cdb7a10039e1b28a35502542cd1669ce1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d77b93745f1871abda1f801cd128fabba4cbb5329c7683d292afdfd255f63cfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d77b93745f1871abda1f801cd128fabba4cbb5329c7683d292afdfd255f63cfc->enter($__internal_d77b93745f1871abda1f801cd128fabba4cbb5329c7683d292afdfd255f63cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3f7d8521b41ab14f21e290365cc957f034563f7866866fbfedf2ddaa8eefb6ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f7d8521b41ab14f21e290365cc957f034563f7866866fbfedf2ddaa8eefb6ed->enter($__internal_3f7d8521b41ab14f21e290365cc957f034563f7866866fbfedf2ddaa8eefb6ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " AppBundle:CreatureFantastique:NYU ";
        
        $__internal_3f7d8521b41ab14f21e290365cc957f034563f7866866fbfedf2ddaa8eefb6ed->leave($__internal_3f7d8521b41ab14f21e290365cc957f034563f7866866fbfedf2ddaa8eefb6ed_prof);

        
        $__internal_d77b93745f1871abda1f801cd128fabba4cbb5329c7683d292afdfd255f63cfc->leave($__internal_d77b93745f1871abda1f801cd128fabba4cbb5329c7683d292afdfd255f63cfc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_06b54eee7588e2f245fa3becf30d7768a067c78e8d0c9be05f36001016382bf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06b54eee7588e2f245fa3becf30d7768a067c78e8d0c9be05f36001016382bf1->enter($__internal_06b54eee7588e2f245fa3becf30d7768a067c78e8d0c9be05f36001016382bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_695c04b929c998d3ddd87d3988034296c7a44dae3e3f4b471ebf39782db89c27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_695c04b929c998d3ddd87d3988034296c7a44dae3e3f4b471ebf39782db89c27->enter($__internal_695c04b929c998d3ddd87d3988034296c7a44dae3e3f4b471ebf39782db89c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the creatureFantastique:New page</h1>
    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <input type=\"submit\" value=\"LOL\">
    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_695c04b929c998d3ddd87d3988034296c7a44dae3e3f4b471ebf39782db89c27->leave($__internal_695c04b929c998d3ddd87d3988034296c7a44dae3e3f4b471ebf39782db89c27_prof);

        
        $__internal_06b54eee7588e2f245fa3becf30d7768a067c78e8d0c9be05f36001016382bf1->leave($__internal_06b54eee7588e2f245fa3becf30d7768a067c78e8d0c9be05f36001016382bf1_prof);

    }

    public function getTemplateName()
    {
        return ":CreatureFantastique:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 10,  75 => 8,  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %} AppBundle:CreatureFantastique:NYU {% endblock %}

{% block body %}
<h1>Welcome to the creatureFantastique:New page</h1>
    {{ form_start(form) }}
    {{ form_widget(form) }}
    <input type=\"submit\" value=\"LOL\">
    {{ form_end(form) }}
{% endblock %}

", ":CreatureFantastique:new.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/app/Resources/views/CreatureFantastique/new.html.twig");
    }
}
