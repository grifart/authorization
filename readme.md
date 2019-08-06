# Scoped authorization

Uses concept of "scopes" to define scope-specific roles for users.

This is useful when there are for users that gains project-level permissions. This means they have manager-level access to project A and guest-level access to project B.

Another user can have global role of administrator and can gain access to all projects without need of being part of a project.

## Further sources

- Matej's talk: https://youtu.be/JAYeMsAxZOE?t=12m16s
- Matej's example repo: https://github.com/matej21/nette-authorization-example/blob/master/app/Core/Security/
- CampApp issue: https://gitlab.grifart.cz/KampApp/KampApp/issues/6
- Mango web more complete implementation: https://github.com/mangoweb-backend/authorization
- Grifart fork: [gitlab](https://gitlab.grifart.cz/grifart/authorization), [github](https://github.com/grifart/manogweb-backend-authorization/tree/master)

# Contributing

This repository is fork of [mangoweb-backend/authorization](https://github.com/mangoweb-backend/authorization).

Primary development place is [gitlab.grifart.cz](https://gitlab.grifart.cz/grifart/authorization). `master` is automatically replicated back to [github:grifart/manogweb-backend-authorization](https://github.com/grifart/manogweb-backend-authorization.git).

## Submitting contribution into fork

### Internal contributions

Use GitLab and open merge request, target: `master`. After merge it will be automatically propagated to GitHub.

### External contributions

**External developers:** Use GitHub, open pull request targeting [our master `master`](https://github.com/grifart/manogweb-backend-authorization/tree/master).

**Internal reviewer and maintainer:**

- fetch changes to local repo
- then merge into local `master`
- push local master into `gitlab/master` (this will be automatically propagated to GitHub)
- remove branches that are not needed anymore


