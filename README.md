## Getting Started

### Install

1. Clone repository:

```bash
git clone git@github.com:NatalyaSamara/landings-test.git
```

2. Create .env file:

```
make env
```

3. Install composer packages:

```
make composer
```

4. Build application image:

```bash
make build
```

5. Start application:

```bash
make up
```

6. Migrate && Seed:

```bash
make migrate
```

Congratulations, now it is ready to use!

## Uninstall

```bash
make prune
```

## Testing

Integration and unit tests:

```
make test
```
