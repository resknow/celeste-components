# Accordion

![The San Juan Mountains are beautiful!](https://assets.resknow.co.uk/images/wp-celeste/component-accordion.png)

### Properties

| Prop | Description |
| --- | --- |
| `id` | Unique ID - important if there are multiple per page |
| `preview` | True/False - whether or not the component is being |rendered inside the Block Editor

## AccordionItem

The `Accordion` component acts as the container for `AccordionItem` components. The `AccordionItem` accepts the content for each item.

| Prop | Description |
| --- | --- |
| `id` | Unique ID for the item, this is used to track which item is currently open, so is required. |
| `title` | The title of the item, this is shown as the heading and button |
| `content` | The content to be toggled |

## Example

The below is an example of an FAQs block which renders an array of custom post type items as an Accordion.

```html
<div class="block-faqs">
    <Accordion :id="block.id" :preview="is_preview">
        {% for faq in faqs %}
            <Accordion.Item
                :key="loop.index"
                :title="faq.post_title"
                :content="faq.post_content"
            />
        {% endfor %}
    </Accordion>
</div>
```