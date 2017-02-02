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
        $__internal_e7883b94cb460441c538447fe0d2388e99b30497023ee8cc670a8918d1086d1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7883b94cb460441c538447fe0d2388e99b30497023ee8cc670a8918d1086d1a->enter($__internal_e7883b94cb460441c538447fe0d2388e99b30497023ee8cc670a8918d1086d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_51979145103b7366791189a554e9c278f27c88dec75b2143dcea4c62894b34c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51979145103b7366791189a554e9c278f27c88dec75b2143dcea4c62894b34c7->enter($__internal_51979145103b7366791189a554e9c278f27c88dec75b2143dcea4c62894b34c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_e7883b94cb460441c538447fe0d2388e99b30497023ee8cc670a8918d1086d1a->leave($__internal_e7883b94cb460441c538447fe0d2388e99b30497023ee8cc670a8918d1086d1a_prof);

        
        $__internal_51979145103b7366791189a554e9c278f27c88dec75b2143dcea4c62894b34c7->leave($__internal_51979145103b7366791189a554e9c278f27c88dec75b2143dcea4c62894b34c7_prof);

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
