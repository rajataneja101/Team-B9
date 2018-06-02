package com.teamb9.exception;

@SuppressWarnings("serial")
public class CustomUnauthorizedException extends SentienceImsException {

	private String code;

	public CustomUnauthorizedException() {
		super();
	}

	public CustomUnauthorizedException(String code) {
		super(code);
	}

	/**
	 * 
	 * @param msg
	 */
	public CustomUnauthorizedException(String code, String msg) {

		super(msg);
		this.code = code;
	}

	public String getCode() {
		return code;
	}

}
