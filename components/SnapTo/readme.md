# SnapTo

A horizontal scrolling container, optionally with arrows. Uses CSS Scroll Snap.

## Usage

You can pass an optional `withArrows` prop to display the control arrows. They are hidden on smaller viewports.

```html
<SnapTo withArrows>
    <div class="w-96 border p-3 text-center">Card</div>
    <div class="w-96 border p-3 text-center">Card</div>
    <div class="w-96 border p-3 text-center">Card</div>
    <div class="w-96 border p-3 text-center">Card</div>
    <div class="w-96 border p-3 text-center">Card</div>
    <div class="w-96 border p-3 text-center">Card</div>
    <div class="w-96 border p-3 text-center">Card</div>
    <div class="w-96 border p-3 text-center">Card</div>
</SnapTo>
```