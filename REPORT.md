# SYSARCH32 Midterm Project Report

## Project Information

- **Project Name**: College Management System
- **GitHub Repository**: [https://github.com/YOUR_USERNAME/college-management-system](https://github.com/YOUR_USERNAME/college-management-system)
- **Team Members**:
  - [Your Name](https://github.com/YOUR_USERNAME)
  - [Partner's Name](https://github.com/PARTNER_USERNAME)

## Git Workflow Summary

For this project, we implemented a feature-branch workflow:

1. The `main` branch contains the stable, production-ready code
2. Feature branches were created for new features or bug fixes
3. Pull requests were used to merge changes into `main`
4. Code reviews were conducted before merging

### Branch Strategy

- `main`: Production-ready code
- `feature/college-validation`: Implementation of College form validation
- `feature/department-search`: Implementation of Department search functionality
- `fix/database-connection`: Fix for database connection issues
- `feature/ui-improvements`: UI layout and responsiveness improvements

## Pull Requests and Code Reviews

### PR #1: College Form Validation

- **Created by**: [Your Name]
- **Reviewed by**: [Partner's Name]
- **Description**: Added input validation for College form
- **Review Process**:
  - [Partner] suggested improving error messages
  - [You] made requested changes
  - [Partner] approved the PR
- **Screenshot**: [Insert screenshot of PR]

### PR #2: Department Search Functionality

- **Created by**: [Partner's Name]
- **Reviewed by**: [Your Name]
- **Description**: Added search functionality for Departments
- **Review Process**:
  - [You] suggested adding pagination
  - [Partner] implemented the suggestion
  - [You] approved the PR
- **Screenshot**: [Insert screenshot of PR]

## GitHub Issues

We used GitHub Issues to track tasks and bugs:

1. **Issue #1**: Implement input validation for College form
   - Assigned to: [Your Name]
   - Status: Closed
   - Screenshot: [Insert screenshot]

2. **Issue #2**: Add search functionality for Departments
   - Assigned to: [Partner's Name]
   - Status: Closed
   - Screenshot: [Insert screenshot]

3. **Issue #3**: Fix database connection timeout issue
   - Assigned to: [Your Name]
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
