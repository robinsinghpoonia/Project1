<?php

/* modules/contrib/webform/templates/webform-submission-navigation.html.twig */
class __TwigTemplate_e7fcc7d1f96c07448ad1d84cca8e8d9c902ed500dfa9d0cba585ce4591aa66e7 extends Twig_Template
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
        $tags = array("if" => 17);
        $filters = array("t" => 23);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('t'),
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
        if (((isset($context["prev_url"]) ? $context["prev_url"] : null) || (isset($context["next_url"]) ? $context["next_url"] : null))) {
            // line 18
            echo "  <nav id=\"webform-submission-navigation-";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["webform_id"]) ? $context["webform_id"] : null), "html", null, true));
            echo "\" class=\"webform-submission-navigation\" role=\"navigation\" aria-labelledby=\"webform-submission-label-";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["webform_id"]) ? $context["webform_id"] : null), "html", null, true));
            echo "\">
    <h2 class=\"visually-hidden\" id=\"webform-submission-label-";
            // line 19
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["webform_id"]) ? $context["webform_id"] : null), "html", null, true));
            echo "\">Submission navigation links for ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["webform_title"]) ? $context["webform_title"] : null), "html", null, true));
            echo "</h2>
    <ul class=\"webform-submission-pager\">
      ";
            // line 21
            if ((isset($context["prev_url"]) ? $context["prev_url"] : null)) {
                // line 22
                echo "        <li class=\"webform-submission-pager__item webform-submission-pager__item--previous\">
          <a href=\"";
                // line 23
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["prev_url"]) ? $context["prev_url"] : null), "html", null, true));
                echo "\" rel=\"prev\" title=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to previous page")));
                echo "\"><b>";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("‹")));
                echo "</b> ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Previous submission")));
                echo "</a>
        </li>
      ";
            }
            // line 26
            echo "      ";
            if ((isset($context["next_url"]) ? $context["next_url"] : null)) {
                // line 27
                echo "        <li class=\"webform-submission-pager__item webform-submission-pager__item--next\">
          <a href=\"";
                // line 28
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["next_url"]) ? $context["next_url"] : null), "html", null, true));
                echo "\" rel=\"next\" title=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to next page")));
                echo "\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Next submission")));
                echo " <b>";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("›")));
                echo "</b></a>
        </li>
      ";
            }
            // line 31
            echo "    </ul>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/contrib/webform/templates/webform-submission-navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 31,  82 => 28,  79 => 27,  76 => 26,  64 => 23,  61 => 22,  59 => 21,  52 => 19,  45 => 18,  43 => 17,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/contrib/webform/templates/webform-submission-navigation.html.twig", "/var/www/html/RND/RobinSingh/drupal-8.5.6/modules/contrib/webform/templates/webform-submission-navigation.html.twig");
    }
}
