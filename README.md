
# Json to Text Table API

A simple api to create a text based table from a json payload


## API Usage

#### Create text based table

```
  POST http://localhost:8000/create
```

#### Payload:
```json
{
  "table": {
    "headers": ["ID", "Name", "Age", "Occupation"],
    "rows": [
      [1, "Alice Smith", 30, "Engineer"],
      [2, "Bob Johnson", 45, "Teacher"],
      [3, "Charlie Brown", 28, "Designer"],
      [4, "Dana White", 35, "Developer"]
    ]
  }
}
```

#### Response:
```
+----+---------------+-----+------------+
| ID | Name          | Age | Occupation |
+----+---------------+-----+------------+
| 1  | Alice Smith   | 30  | Engineer   |
| 2  | Bob Johnson   | 45  | Teacher    |
| 3  | Charlie Brown | 28  | Designer   |
| 4  | Dana White    | 35  | Developer  |
+----+---------------+-----+------------+
```

## Live API

~TBC~

## Deployment

To deploy this project run

```bash
  $ composer install
  $ php -S localhost:8000
```

