<?php

/* themes/drupal8_zymphonies_theme/templates/content/comment.html.twig */
class __TwigTemplate_70860c6f0b9a3d7f72f8bac2cf949e67c1ef94c169ef9f73bd5d2cea0bd7fcf4 extends Twig_Template
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
        $tags = array("if" => 67, "set" => 71);
        $filters = array();
        $functions = array("attach_library" => 68);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'set'),
                array(),
                array('attach_library')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 67
        if ((isset($context["threaded"]) ? $context["threaded"] : null)) {
            // line 68
            echo "  ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("classy/indented"), "html", null, true));
            echo "
";
        }
        // line 71
        $context["classes"] = array(0 => "comment", 1 => "js-comment", 2 => (((        // line 74
(isset($context["status"]) ? $context["status"] : null) != "published")) ? ((isset($context["status"]) ? $context["status"] : null)) : ("")), 3 => (($this->getAttribute($this->getAttribute(        // line 75
(isset($context["comment"]) ? $context["comment"] : null), "owner", array()), "anonymous", array())) ? ("by-anonymous") : ("")), 4 => (((        // line 76
(isset($context["author_id"]) ? $context["author_id"] : null) && ((isset($context["author_id"]) ? $context["author_id"] : null) == $this->getAttribute((isset($context["commented_entity"]) ? $context["commented_entity"] : null), "getOwnerId", array(), "method")))) ? ((("by-" . $this->getAttribute((isset($context["commented_entity"]) ? $context["commented_entity"] : null), "getEntityTypeId", array(), "method")) . "-author")) : ("")));
        // line 79
        echo "<article";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">

  ";
        // line 86
        echo "
  <mark class=\"hidden\" data-comment-timestamp=\"";
        // line 87
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["new_indicator_timestamp"]) ? $context["new_indicator_timestamp"] : null), "html", null, true));
        echo "\"></mark>

  <footer class=\"comment-wrap\">
    <div class=\"author-details\">
      ";
        // line 91
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["user_picture"]) ? $context["user_picture"] : null), "html", null, true));
        echo "
      ";
        // line 92
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["permalink"]) ? $context["permalink"] : null), "html", null, true));
        echo "
      ";
        // line 93
        if ((isset($context["parent"]) ? $context["parent"] : null)) {
            // line 94
            echo "        <p class=\"parent visually-hidden\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["parent"]) ? $context["parent"] : null), "html", null, true));
            echo "</p>
      ";
        }
        // line 96
        echo "    </div>

    <div class=\"author-comments\">
      <p class=\"comment-submitted\">";
        // line 99
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["submitted"]) ? $context["submitted"] : null), "html", null, true));
        echo "</p>
      <div";
        // line 100
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => "content"), "method"), "html", null, true));
        echo ">
        ";
        // line 101
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 102
            echo "          ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
            echo "
          <h3";
            // line 103
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_attributes"]) ? $context["title_attributes"] : null), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</h3>
          ";
            // line 104
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
            echo "
        ";
        }
        // line 106
        echo "        ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "
      </div>
    </div>   

  </footer>
  
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/drupal8_zymphonies_theme/templates/content/comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 106,  114 => 104,  108 => 103,  103 => 102,  101 => 101,  97 => 100,  93 => 99,  88 => 96,  82 => 94,  80 => 93,  76 => 92,  72 => 91,  65 => 87,  62 => 86,  56 => 79,  54 => 76,  53 => 75,  52 => 74,  51 => 71,  45 => 68,  43 => 67,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for comments.*/
/*  **/
/*  * Available variables:*/
/*  * - author: Comment author. Can be a link or plain text.*/
/*  * - content: The content-related items for the comment display. Use*/
/*  *   {{ content }} to print them all, or print a subset such as*/
/*  *   {{ content.field_example }}. Use the following code to temporarily suppress*/
/*  *   the printing of a given child element:*/
/*  *   @code*/
/*  *   {{ content|without('field_example') }}*/
/*  *   @endcode*/
/*  * - created: Formatted date and time for when the comment was created.*/
/*  *   Preprocess functions can reformat it by calling format_date() with the*/
/*  *   desired parameters on the 'comment.created' variable.*/
/*  * - changed: Formatted date and time for when the comment was last changed.*/
/*  *   Preprocess functions can reformat it by calling format_date() with the*/
/*  *   desired parameters on the 'comment.changed' variable.*/
/*  * - permalink: Comment permalink.*/
/*  * - submitted: Submission information created from author and created*/
/*  *   during template_preprocess_comment().*/
/*  * - user_picture: The comment author's profile picture.*/
/*  * - status: Comment status. Possible values are:*/
/*  *   unpublished, published, or preview.*/
/*  * - title: Comment title, linked to the comment.*/
/*  * - attributes: HTML attributes for the containing element.*/
/*  *   The attributes.class may contain one or more of the following classes:*/
/*  *   - comment: The current template type; e.g., 'theming hook'.*/
/*  *   - by-anonymous: Comment by an unregistered user.*/
/*  *   - by-{entity-type}-author: Comment by the author of the parent entity,*/
/*  *     eg. by-node-author.*/
/*  *   - preview: When previewing a new or edited comment.*/
/*  *   The following applies only to viewers who are registered users:*/
/*  *   - unpublished: An unpublished comment visible only to administrators.*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the main title tag that appears in the template.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the main title tag that appears in the template.*/
/*  * - content_attributes: List of classes for the styling of the comment content.*/
/*  * - title_attributes: Same as attributes, except applied to the main title*/
/*  *   tag that appears in the template.*/
/*  * - threaded: A flag indicating whether the comments are threaded or not.*/
/*  **/
/*  * These variables are provided to give context about the parent comment (if*/
/*  * any):*/
/*  * - comment_parent: Full parent comment entity (if any).*/
/*  * - parent_author: Equivalent to author for the parent comment.*/
/*  * - parent_created: Equivalent to created for the parent comment.*/
/*  * - parent_changed: Equivalent to changed for the parent comment.*/
/*  * - parent_title: Equivalent to title for the parent comment.*/
/*  * - parent_permalink: Equivalent to permalink for the parent comment.*/
/*  * - parent: A text string of parent comment submission information created from*/
/*  *   'parent_author' and 'parent_created' during template_preprocess_comment().*/
/*  *   This information is presented to help screen readers follow lengthy*/
/*  *   discussion threads. You can hide this from sighted users using the class*/
/*  *   visually-hidden.*/
/*  **/
/*  * These two variables are provided for context:*/
/*  * - comment: Full comment object.*/
/*  * - entity: Entity the comments are attached to.*/
/*  **/
/*  * @see template_preprocess_comment()*/
/*  *//* */
/* #}*/
/* {% if threaded %}*/
/*   {{ attach_library('classy/indented') }}*/
/* {% endif %}*/
/* {%*/
/*   set classes = [*/
/*     'comment',*/
/*     'js-comment',*/
/*     status != 'published' ? status,*/
/*     comment.owner.anonymous ? 'by-anonymous',*/
/*     author_id and author_id == commented_entity.getOwnerId() ? 'by-' ~ commented_entity.getEntityTypeId() ~ '-author',*/
/*   ]*/
/* %}*/
/* <article{{ attributes.addClass(classes) }}>*/
/* */
/*   {#*/
/*     Hide the "new" indicator by default, let a piece of JavaScript ask the*/
/*     server which comments are new for the user. Rendering the final "new"*/
/*     indicator here would break the render cache.*/
/*   #}*/
/* */
/*   <mark class="hidden" data-comment-timestamp="{{ new_indicator_timestamp }}"></mark>*/
/* */
/*   <footer class="comment-wrap">*/
/*     <div class="author-details">*/
/*       {{ user_picture }}*/
/*       {{ permalink }}*/
/*       {% if parent %}*/
/*         <p class="parent visually-hidden">{{ parent }}</p>*/
/*       {% endif %}*/
/*     </div>*/
/* */
/*     <div class="author-comments">*/
/*       <p class="comment-submitted">{{ submitted }}</p>*/
/*       <div{{ content_attributes.addClass('content') }}>*/
/*         {% if title %}*/
/*           {{ title_prefix }}*/
/*           <h3{{ title_attributes }}>{{ title }}</h3>*/
/*           {{ title_suffix }}*/
/*         {% endif %}*/
/*         {{ content }}*/
/*       </div>*/
/*     </div>   */
/* */
/*   </footer>*/
/*   */
/* </article>*/
/* */
