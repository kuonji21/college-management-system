# SYSARCH32 Midterm Project Report

## Project Information

- **Project Name**: College Management System
- **GitHub Repository**: [https://github.com/kuonji21/college-management-system](https://github.com/kuonji21/college-management-system)
- **Team Members**:
  - [Lance Paul Montemar](https://github.com/kuonji21)
  - [Nino Angelo Lawan](https://github.com/Nino0s)

## Git Workflow Summary

For this project, we implemented a feature-branch workflow:

1. The `main` branch contains the stable, production-ready code
2. Feature branches were created for new features or bug fixes
3. Pull requests were used to merge changes into `main`
4. Code reviews were conducted before merging

### Branch Strategy

- `main`: Production-ready code
- `feature/college-form-validation`: Implementation of College form validation
- `feature/department-search`: Implementation of Department search functionality
- `fix/database-connection-timeout`: Fix for database connection issues
- `feature/department-pagination`: Adds pagination to the department listing page

## Pull Requests and Code Reviews

### PR #1: College Form Validation

- **Created by**: [Lance Paul Montemar]
- **Reviewed by**: [Nino Angelo Lawan]
- **Description**: Added input validation for College form
- **Review Process**:
  - [Nino Angelo Lawan] suggested improving error messages
  - [Lance Paul Montemar] made requested changes
  - [[Nino Angelo Lawan] approved the PR
- **Screenshot**: [Insert screenshot of PR]

### PR #2: Department Search Functionality

- **Created by**: [[Nino Angelo Lawan]
- **Reviewed by**: [Lance Paul Montemar]
- **Description**: Added search functionality for Departments
- **Review Process**:
  - [Lance Paul Montemar] suggested adding pagination
  - [Nino Angelo Lawan] implemented the suggestion
  - [Lance Paul Montemar] approved the PR
- **Screenshot**: [Insert screenshot of PR]

## GitHub Issues

We used GitHub Issues to track tasks and bugs:

1. **Issue #1**: Implement input validation for College form
   - Assigned to: [Lance Paul Montemar]
   - Status: Closed
   - Screenshot: [Insert screenshot]

2. **Issue #2**: Add search functionality for Departments
   - Assigned to: [Nino Angelo Lawan]
   - Status: Closed
   - Screenshot: [Insert screenshot]

3. **Issue #3**: Fix database connection timeout issue
   - Assigned to: [Lance Paul Montemar]
   - Status: Closed
   - Screenshot: [Insert screenshot]

## Commit History

Our commit history follows best practices with meaningful commit messages:

- `feat: initial project commit`
- `feat: add input validation for College form`
- `feat: display validation errors in College form`
- `fix: address PR feedback on validation messages`
- `feat: add search functionality for departments`
- `fix: resolve database connection timeout issue`
- `feat: improve UI layout and responsiveness`
- `docs: add README with project overview and Git workflow`

Screenshot of commit history: [Insert screenshot]

## Challenges and Solutions

### Challenge 1: Merge Conflicts

**Problem**: When merging the UI improvements branch, we encountered conflicts in the CSS files.

**Solution**: We resolved the conflicts by carefully combining both sets of styles, ensuring that all UI elements maintained their appearance.

### Challenge 2: Git Branch Management

**Problem**: Initially, we were confused about when to create new branches versus continuing work on existing ones.

**Solution**: We established a clear guideline to create a new branch for each distinct feature or bug fix, and to keep branches focused on a single issue.

## Lessons Learned

1. **Effective Branching**: Using feature branches helped us work independently without affecting each other's code.
2. **Pull Request Benefits**: The PR process improved our code quality through peer review.
3. **Issue Tracking**: GitHub Issues helped us organize tasks and track progress.
4. **Commit Practices**: Writing meaningful commit messages made it easier to understand the project history.

## Conclusion

This project gave us practical experience with Git and GitHub in a real-world development scenario. We learned how to collaborate effectively using branches, pull requests, and issues, which will be valuable skills for future software development projects.
