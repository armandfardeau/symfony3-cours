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
        $__internal_7ebb060090036d447818972d2c2390b74e7293dbdedfdf09fd76ee652b93e368 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ebb060090036d447818972d2c2390b74e7293dbdedfdf09fd76ee652b93e368->enter($__internal_7ebb060090036d447818972d2c2390b74e7293dbdedfdf09fd76ee652b93e368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_dca97ff751a9ba97af38f869f2f1024670bd1a197599ba7ec140de26a5d92a2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dca97ff751a9ba97af38f869f2f1024670bd1a197599ba7ec140de26a5d92a2a->enter($__internal_dca97ff751a9ba97af38f869f2f1024670bd1a197599ba7ec140de26a5d92a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_7ebb060090036d447818972d2c2390b74e7293dbdedfdf09fd76ee652b93e368->leave($__internal_7ebb060090036d447818972d2c2390b74e7293dbdedfdf09fd76ee652b93e368_prof);

        
        $__internal_dca97ff751a9ba97af38f869f2f1024670bd1a197599ba7ec140de26a5d92a2a->leave($__internal_dca97ff751a9ba97af38f869f2f1024670bd1a197599ba7ec140de26a5d92a2a_prof);

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
