# Scoped authorization

Uses concept of "scopes" to define scope-specific roles for users.

This is useful when there are for users that gains project-level permissions. This means they have manager-level access to project A and guest-level access to project B.

Another user can have global role of administrator and can gain access to all projects without need of being part of a project.

## Further sources

- Matej's talk: https://youtu.be/JAYeMsAxZOE?t=12m16s
- Matej's example repo: https://github.com/matej21/nette-authorization-example/blob/master/app/Core/Security/
- CampApp issue: https://gitlab.grifart.cz/KampApp/KampApp/issues/6
- Mango web more complete implementation: https://github.com/mangoweb-backend/authorization
- Grifart fork: https://gitlab.grifart.cz/grifart/authorization
