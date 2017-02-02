<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_b4b960b91f7d6a8e81148c8ab4e7852ac91d37311eceaa570e2b761377a5bad1 extends Twig_Template
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
        $__internal_65ac60bdc182aab884be2688ee6e8987ea5acba6b8e7d4852066b127660ec123 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65ac60bdc182aab884be2688ee6e8987ea5acba6b8e7d4852066b127660ec123->enter($__internal_65ac60bdc182aab884be2688ee6e8987ea5acba6b8e7d4852066b127660ec123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_27e8764fab6f7b098670b41b2d2cff7ee7f90ae878a0a355725ed777e3c98c42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27e8764fab6f7b098670b41b2d2cff7ee7f90ae878a0a355725ed777e3c98c42->enter($__internal_27e8764fab6f7b098670b41b2d2cff7ee7f90ae878a0a355725ed777e3c98c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_65ac60bdc182aab884be2688ee6e8987ea5acba6b8e7d4852066b127660ec123->leave($__internal_65ac60bdc182aab884be2688ee6e8987ea5acba6b8e7d4852066b127660ec123_prof);

        
        $__internal_27e8764fab6f7b098670b41b2d2cff7ee7f90ae878a0a355725ed777e3c98c42->leave($__internal_27e8764fab6f7b098670b41b2d2cff7ee7f90ae878a0a355725ed777e3c98c42_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
