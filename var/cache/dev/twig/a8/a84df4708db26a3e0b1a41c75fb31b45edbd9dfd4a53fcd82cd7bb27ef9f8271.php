<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_e1bc2e7d661c47a731db1e918e99b3197d7b01be05977a20b906b447043736fa extends Twig_Template
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
        $__internal_315cc88e8e124ae19ab0c9f4858b3cb876811ab745c84e34be9f2e085eb6781f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_315cc88e8e124ae19ab0c9f4858b3cb876811ab745c84e34be9f2e085eb6781f->enter($__internal_315cc88e8e124ae19ab0c9f4858b3cb876811ab745c84e34be9f2e085eb6781f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_27c0b3aac33cc8fe8a94d1f34e62ddefc6e9f007f7605f9dc5fa5504ad418633 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27c0b3aac33cc8fe8a94d1f34e62ddefc6e9f007f7605f9dc5fa5504ad418633->enter($__internal_27c0b3aac33cc8fe8a94d1f34e62ddefc6e9f007f7605f9dc5fa5504ad418633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_315cc88e8e124ae19ab0c9f4858b3cb876811ab745c84e34be9f2e085eb6781f->leave($__internal_315cc88e8e124ae19ab0c9f4858b3cb876811ab745c84e34be9f2e085eb6781f_prof);

        
        $__internal_27c0b3aac33cc8fe8a94d1f34e62ddefc6e9f007f7605f9dc5fa5504ad418633->leave($__internal_27c0b3aac33cc8fe8a94d1f34e62ddefc6e9f007f7605f9dc5fa5504ad418633_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
