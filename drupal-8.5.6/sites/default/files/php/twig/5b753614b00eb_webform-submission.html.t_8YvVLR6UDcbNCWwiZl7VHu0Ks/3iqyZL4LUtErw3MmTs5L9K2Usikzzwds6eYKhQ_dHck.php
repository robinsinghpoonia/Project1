<?php

/* modules/contrib/webform/templates/webform-submission.html.twig */
class __TwigTemplate_953e5f3a1e4518baf4df42c96eee8dd76393c188237639bf6665bf00481af32e extends Twig_Template
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
        $tags = array("set" => 17);
        $filters = array("clean_class" => 19);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set'),
                array('clean_class'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 17
        $context["classes"] = array(0 => "webform-submission", 1 => ("webform-submission--webform-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 19
(isset($context["webform"]) ? $context["webform"] : null), "id", array(), "method"))), 2 => (($this->getAttribute(        // line 20
(isset($context["webform_submission"]) ? $context["webform_submission"] : null), "isSticky", array(), "method")) ? ("webform-submission--sticky") : ("")), 3 => ((        // line 21
(isset($context["view_mode"]) ? $context["view_mode"] : null)) ? (("webform-submission--view-mode-" . \Drupal\Component\Utility\Html::getClass((isset($context["view_mode"]) ? $context["view_mode"] : null)))) : ("")));
        // line 24
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
";
        // line 25
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["elements"]) ? $context["elements"] : null), "html", null, true));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/webform/templates/webform-submission.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 25,  48 => 24,  46 => 21,  45 => 20,  44 => 19,  43 => 17,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/contrib/webform/templates/webform-submission.html.twig", "/var/www/html/RND/RobinSingh/drupal-8.5.6/modules/contrib/webform/templates/webform-submission.html.twig");
    }
}
