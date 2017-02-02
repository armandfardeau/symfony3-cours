<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_66cda4a1adc8094bd8e2b416a02b30dd04ed5ed006d24ced7c31147b9c4ec835 extends Twig_Template
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
        $__internal_50f7791a307998ab9e9be83b65399035a788365e282c0518c8c546197acc5ae6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50f7791a307998ab9e9be83b65399035a788365e282c0518c8c546197acc5ae6->enter($__internal_50f7791a307998ab9e9be83b65399035a788365e282c0518c8c546197acc5ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_7b3ae05f1738627d7c7b9dcba747024831bef6ed055895485fae7f4e4c3b4b7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b3ae05f1738627d7c7b9dcba747024831bef6ed055895485fae7f4e4c3b4b7d->enter($__internal_7b3ae05f1738627d7c7b9dcba747024831bef6ed055895485fae7f4e4c3b4b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_50f7791a307998ab9e9be83b65399035a788365e282c0518c8c546197acc5ae6->leave($__internal_50f7791a307998ab9e9be83b65399035a788365e282c0518c8c546197acc5ae6_prof);

        
        $__internal_7b3ae05f1738627d7c7b9dcba747024831bef6ed055895485fae7f4e4c3b4b7d->leave($__internal_7b3ae05f1738627d7c7b9dcba747024831bef6ed055895485fae7f4e4c3b4b7d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
