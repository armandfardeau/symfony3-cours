<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_203fe04463205e5f86e1c3bf527bcfdd59780b363985ecb3fef57d405bfbb6e6 extends Twig_Template
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
        $__internal_f2f2ba579b572702fe690c7bc83221106770fae244f9fd5b2a74abde6e638e61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2f2ba579b572702fe690c7bc83221106770fae244f9fd5b2a74abde6e638e61->enter($__internal_f2f2ba579b572702fe690c7bc83221106770fae244f9fd5b2a74abde6e638e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_11dc57035c0576d1e1e692547a724a97cf28b8f15bcdc7d068ac0d261166a319 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11dc57035c0576d1e1e692547a724a97cf28b8f15bcdc7d068ac0d261166a319->enter($__internal_11dc57035c0576d1e1e692547a724a97cf28b8f15bcdc7d068ac0d261166a319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_f2f2ba579b572702fe690c7bc83221106770fae244f9fd5b2a74abde6e638e61->leave($__internal_f2f2ba579b572702fe690c7bc83221106770fae244f9fd5b2a74abde6e638e61_prof);

        
        $__internal_11dc57035c0576d1e1e692547a724a97cf28b8f15bcdc7d068ac0d261166a319->leave($__internal_11dc57035c0576d1e1e692547a724a97cf28b8f15bcdc7d068ac0d261166a319_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
