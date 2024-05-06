#!/bin/bash

echo "Begin Pull From Git Repo: "

path="/Users/jeremiahliao/Desktop/Jeremiah/Coding_Stuff/hope coding camp/hopekcc-web-test/dev/"

echo $path

echo "Changing directory to: $path"

cd "$path"

git pull

echo "Successfully pulled from repo"
