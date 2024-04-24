## Properties

| Prop | Description |
| --- | --- |
| `name` | Input name |
| `id` | Unique ID, if not set, name will be used as the ID. Required if the type is set to `radio` |
| `label` | Input label |
| `checked` | Default checked state, `true` or `false` |
| `type` | Input type, `checkbox` or `radio` |

### Note

Attributes passed to this component will be rendered on the `<input>` and not on the root element. This lets you listen for input events as usual.