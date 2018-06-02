package com.teamb9.exception;

@SuppressWarnings("serial")
public class CustomForbiddenException extends SentienceImsException {

	private String code;

	public CustomForbiddenException() {
		super();
	}

	public CustomForbiddenException(String code) {
		super(code);
	}

	/**
	 * 
	 * @param msg
	 */
	public CustomForbiddenException(String code, String msg) {

		super(msg);
		this.code = code;
	}

	public String getCode() {
		return code;
	}

}
