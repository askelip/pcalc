# Parent Calc

Parents these days tend to overestimate their ability to meet all their planned daily routines. Sometimes the primary parent's spouse is ignorant of the amount of work the primary parent is doing. 

The parent calculator is a POC project with the purpose of allowing parents to plan a daily routine that works, present it to their spouse as a reference for discussion and estimate whether they are neglecting self-care and in risk of burnout.

## Prerequisites

If you'd like to run this project on your computer, you must install docker, php 8.1+ and symfony CLI.

## Installation

To copy the project's files, git clone it.
```bash
git clone https://github.com/askelip/pcalc.git
```

```bash
cd pcalc
```

The docker compose file contains a setup for a MariaDB container that the Symfony app can connect to.
Run docker compose command inside the project's directory to create the database container.
```bash
docker-compose up -d --build
```
When the container finishes building,
run database migrations
```bash
symfony console doctrine:migrations:migrate
```
Now run the symfony server:start command inside the project's directory to run the symfony app.
```bash
symfony server:start
```
When symfony displays the message: "ready to handle connections",
point your browser to:
```bash
http://127.0.0.1:8000
```

## TODO List
Current version is a crude and basic feature implementation of the project.
The following will need to be implemented for full functionality:
- The app exposes routine and task APIs, but they are currently not used as I preferred to build a server-rendered home page for performance reasons. In the future, initial task list display will be partial, and users will be able to: add new tasks, search for tasks.
- Add category field to task entity (e.g. cleaning, child care, self-care, etc.)
- The frontend UI will need to be improved, e.g. replace the multi select with a better UI component
- Currently, if the user selects all tasks and fill their day, a simple message is displayed. This logic is done on the frontend, but I have in plan a complex business logic for this which will be implemented on the backend as an API.
- Allow the user to store their current daily routine schedule and access it by a unique URL.
- Remove unused bundles installed as a part of the webapp installation in Symfony. I'm leaving them in the project for now as I'm not sure which one I'll use.
- Add tests