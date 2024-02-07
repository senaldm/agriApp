<section class="is-hero-bar">
    <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
      <h1 class="title">
        Profile
      </h1>
      <a class="inline-block text-white no-underline hover:text-yellow-300 hover:text-underline py-2 px-4 font-bold" href="/SignOut">Sign Out</a>
    </div>
  </section>

    <section class="section main-section">
      <div class="grid grid-cols-1 gap-6 lg:grid-cols-2 mb-6">
        <div class="card">
          <header class="card-header">
            <p class="card-header-title">
              <span class="icon"><i class="mdi mdi-account-circle"></i></span>
              Edit Profile
            </p>
          </header>
          <div class="card-content">
            <form>
              <div class="field">

                <div class="field-body">
                  <div class="field file">
                    <label class="upload control">
                      <a class="button blue">
                        Upload
                      </a>
                      <input type="file">
                    </label>
                  </div>
                </div>
              </div>

              <div class="field">
                <label class="label">Name</label>
                <div class="field-body">
                  <div class="field">
                    <div class="control">
                      <input type="text" autocomplete="on" name="name" value="John Doe" class="input" required>
                    </div>

                  </div>
                </div>
              </div>
              <div class="field">
                <label class="label">E-mail</label>
                <div class="field-body">
                  <div class="field">
                    <div class="control">
                      <input type="email" autocomplete="on" name="email" value="user@example.com" class="input" required>
                    </div>

                  </div>
                </div>
              </div>

              <div class="field">
                <div class="control">
                  <button type="submit" class="button green">
                    Submit
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="card">
          <header class="card-header">
            <p class="card-header-title">
              <span class="icon"><i class="mdi mdi-account"></i></span>
              Profile
            </p>
          </header>
          <div class="card-content">
            <div class="w-16 h-16 mr-4 overflow-hidden bg-gray-200 rounded-full">
            <img src="https://drive.google.com/uc?export=view&id=1ZJlFrD5jSRIJab83_zEogSvuTMx3_RXP" alt="Ramanaruban" width="300" height="200" class="rounded-b">
            </div>
        </div>

            <div class="field">
              <label class="label">Name</label>
              <div class="control">
                <input type="text" readonly value="John Doe" class="input is-static">
              </div>
            </div>

            <div class="field">
              <label class="label">E-mail</label>
              <div class="control">
                <input type="text" readonly value="user@example.com" class="input is-static">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card">
        <header class="card-header">
          <p class="card-header-title">
            <span class="icon"><i class="mdi mdi-lock"></i></span>
            Change Password
          </p>
        </header>
        <div class="card-content">
          <form>
            <div class="field">
              <label class="label">Current password</label>
              <div class="control">
                <input type="password" name="password_current" autocomplete="current-password" class="input" required>
              </div>
              <p class="help">Required. Your current password</p>
            </div>
            <hr>
            <div class="field">
              <label class="label">New password</label>
              <div class="control">
                <input type="password" autocomplete="new-password" name="password" class="input" required>
              </div>
              <p class="help">Required. New password</p>
            </div>
            <div class="field">
              <label class="label">Confirm password</label>
              <div class="control">
                <input type="password" autocomplete="new-password" name="password_confirmation" class="input" required>
              </div>
              <p class="help">Required. New password one more time</p>
            </div>
            <hr>
            <div class="field">
              <div class="control">
                <button type="submit" class="button green">
                  Submit
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>
