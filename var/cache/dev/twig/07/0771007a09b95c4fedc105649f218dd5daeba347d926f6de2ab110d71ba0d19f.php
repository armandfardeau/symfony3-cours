<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_8fc1e4352312bd850b230056cf35200c1db9749fefbc53d3d93ac51a4b0692eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb1af5e64105fddf915cfa9219867bc84d913bbf6021044daacb9e728b9cec33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb1af5e64105fddf915cfa9219867bc84d913bbf6021044daacb9e728b9cec33->enter($__internal_fb1af5e64105fddf915cfa9219867bc84d913bbf6021044daacb9e728b9cec33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_92dc7c733b95d195081cf94e5d9bf89148922803de0e4a316dc80adde20a2091 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92dc7c733b95d195081cf94e5d9bf89148922803de0e4a316dc80adde20a2091->enter($__internal_92dc7c733b95d195081cf94e5d9bf89148922803de0e4a316dc80adde20a2091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_fb1af5e64105fddf915cfa9219867bc84d913bbf6021044daacb9e728b9cec33->leave($__internal_fb1af5e64105fddf915cfa9219867bc84d913bbf6021044daacb9e728b9cec33_prof);

        
        $__internal_92dc7c733b95d195081cf94e5d9bf89148922803de0e4a316dc80adde20a2091->leave($__internal_92dc7c733b95d195081cf94e5d9bf89148922803de0e4a316dc80adde20a2091_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6771a03d452c8f63235598fed6acb4615ad0da0970879e4834c86a010831e2b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6771a03d452c8f63235598fed6acb4615ad0da0970879e4834c86a010831e2b2->enter($__internal_6771a03d452c8f63235598fed6acb4615ad0da0970879e4834c86a010831e2b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_78b34d784cf710b48eb78364576811c225d7e299042587a11b833a5029e8105b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78b34d784cf710b48eb78364576811c225d7e299042587a11b833a5029e8105b->enter($__internal_78b34d784cf710b48eb78364576811c225d7e299042587a11b833a5029e8105b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_78b34d784cf710b48eb78364576811c225d7e299042587a11b833a5029e8105b->leave($__internal_78b34d784cf710b48eb78364576811c225d7e299042587a11b833a5029e8105b_prof);

        
        $__internal_6771a03d452c8f63235598fed6acb4615ad0da0970879e4834c86a010831e2b2->leave($__internal_6771a03d452c8f63235598fed6acb4615ad0da0970879e4834c86a010831e2b2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
