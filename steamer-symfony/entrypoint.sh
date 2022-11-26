#!/bin/bash
set -e

cd
export PATH="$HOME/.symfony5/bin:$PATH"

cd -

symfony server:start --port=80
