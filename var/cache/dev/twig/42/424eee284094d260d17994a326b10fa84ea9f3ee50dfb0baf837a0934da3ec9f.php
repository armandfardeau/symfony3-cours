<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_c9f6f1164edf2b3498dfc8556dbc03e83f0484779364cd4e64dd21d5df9847f9 extends Twig_Template
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
        $__internal_d3bef511f4761aaadc832172cf2f85db0008e45e8f2fe7a904350913e3c049d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3bef511f4761aaadc832172cf2f85db0008e45e8f2fe7a904350913e3c049d0->enter($__internal_d3bef511f4761aaadc832172cf2f85db0008e45e8f2fe7a904350913e3c049d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_10149b53ab47e3285d7f8a0ead46c160ce9d23be4b77e3df105e33889842c359 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10149b53ab47e3285d7f8a0ead46c160ce9d23be4b77e3df105e33889842c359->enter($__internal_10149b53ab47e3285d7f8a0ead46c160ce9d23be4b77e3df105e33889842c359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_d3bef511f4761aaadc832172cf2f85db0008e45e8f2fe7a904350913e3c049d0->leave($__internal_d3bef511f4761aaadc832172cf2f85db0008e45e8f2fe7a904350913e3c049d0_prof);

        
        $__internal_10149b53ab47e3285d7f8a0ead46c160ce9d23be4b77e3df105e33889842c359->leave($__internal_10149b53ab47e3285d7f8a0ead46c160ce9d23be4b77e3df105e33889842c359_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
