Git

------------------------------------------------------------------
git config --global user.name "<username>"
-- configure the author name


------------------------------------------------------------------
git config --global user.email <email address>
-- configure the author email address


------------------------------------------------------------------
git init 
-- to initialize a local Git repository


------------------------------------------------------------------
git remote add origin ssh://git@github.com/<username>/<repository-name>.git
-- to add a remote repository


------------------------------------------------------------------
git clone ssh://git@github.com/<username>/<repository-name>.git
-- create a local copy of a remote repository


------------------------------------------------------------------
git add <file-name.txt>
-- add a file to the staging area


------------------------------------------------------------------
git add -A or git add .
-- add all new and changed files to the staging area


------------------------------------------------------------------
git commit -m "<commit message>"
-- commit changes


------------------------------------------------------------------
git rm -r <file-name.txt>
-- remove a file (or folder)


------------------------------------------------------------------
git log
 -- view changes


------------------------------------------------------------------
git log --summary
-- view changes (detailed)


------------------------------------------------------------------
git log --oneline or
git log --pretty=oneline or
git log --pretty=short
-- view changes in one line (briefly)



------------------------------------------------------------------
git checkout<commit id>
-- return to previous commit


------------------------------------------------------------------
git revert <commit id>
-- revert commit (undo one particular commit)


------------------------------------------------------------------
git reset <commit id>
-- reset to previous commit (remove history of all commit after )


------------------------------------------------------------------
git rm --cached <file/folder>
-- stop a file being tracked


------------------------------------------------------------------
git checkout <file/to/restore>
-- restore a file to a previous commit


------------------------------------------------------------------
git branch
-- list branches (the asterisk denotes the current branch)


------------------------------------------------------------------
git branch -a
-- list all branches (local and remote)


------------------------------------------------------------------
git branch <branch name>
-- create a new branch


------------------------------------------------------------------
git checkout -b <branch name>
-- create a new branch and switch to it


------------------------------------------------------------------
git checkout -b <branch name> origin/<branch name>
-- clone a remote branch and switch to it


------------------------------------------------------------------
git branch -m <old branch name> <new branch name>
-- rename a local branch


------------------------------------------------------------------
git checkout <branch name>
-- switch to a branch


------------------------------------------------------------------
git checkout -
-- switch to the branch last checked out


------------------------------------------------------------------
git checkout -- <file-name.txt>
-- discard changes to a file


------------------------------------------------------------------
git branch -d <branch name>
-- delete a branch


------------------------------------------------------------------
git push origin --delete <branch name>
-- delete a remote branch


------------------------------------------------------------------
git diff <source branch> <target branch>
-- preview changes before merging


------------------------------------------------------------------
git merge <branch name>
-- merge a branch into the active branch


------------------------------------------------------------------
git merge <source branch> <target branch>
-- merge a branch into a target branch


------------------------------------------------------------------
git stash
-- stash changes in a dirty working directory


------------------------------------------------------------------
git stash clear
-- remove all stashed entries


------------------------------------------------------------------
git push origin <branch name>
-- push a branch to your remote repository


------------------------------------------------------------------
git push -u origin <branch name>
-- push changes to remote repository (and remember the branch)


------------------------------------------------------------------
git push
-- push changes to remote repository (remembered branch)


------------------------------------------------------------------
git push origin --delete <branch name>
-- delete a remote branch


------------------------------------------------------------------
git pull
-- update local repository to the newest commit


------------------------------------------------------------------
git pull origin <branch name>
-- pull changes from remote repository


------------------------------------------------------------------
git remote add origin ssh://git@github.com/<username>/<repository-name>.git
-- add a remote repository


------------------------------------------------------------------
git remote set-url origin ssh://git@github.com/<username>/<repository-name>.git
-- set a repository's origin branch to SSH


------------------------------------------------------------------
------------------------------------------------------------------
------------------------------------------------------------------



https://dev.to/web/list-of-all-git-commands-4m83