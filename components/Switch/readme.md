## Properties

| Prop | Description |
| --- | --- |
| `name` | Input name |
| `id` | Unique ID, if not set, name will be used as the ID. |
| `checked` | Whether the default state is checked or not, `true` or `false` |

## Events

| Event | Description |
| --- | --- |
| `toggle-change` | Fires when the checked state changes, use `$event.detail.checked` to get the value |