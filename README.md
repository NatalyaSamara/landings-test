## Getting Started

### Install

1. Clone repository:

```bash
git clone git@github.com:NatalyaSamara/landings-test.git
```

2. Install composer packages:

```
make composer
```

3. Build application image:

```bash
make build
```

4. Start application:

```bash
make up
```

5. Migrate && Seed:

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
